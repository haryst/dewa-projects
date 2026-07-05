<?php
// 1. Sertakan file koneksi database
// Pastikan file koneksi.php berada di folder yang sama dengan index.php
include 'koneksi.php';

// 2. Logika Pemrosesan Form Booking (Pemesanan) jika dikirim oleh Klien
$booking_success = false;
$booking_error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'book_service') {
    $client_name = mysqli_real_escape_string($conn, $_POST['client_name']);
    $client_phone = mysqli_real_escape_string($conn, $_POST['client_phone']);
    $package_name = mysqli_real_escape_string($conn, $_POST['package_name']);
    $booking_date = mysqli_real_escape_string($conn, $_POST['booking_date']);
    $location_type = mysqli_real_escape_string($conn, $_POST['location_type']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);

    $query_booking = "INSERT INTO bookings (client_name, client_phone, package_name, booking_date, location_type, address, notes, status) 
                      VALUES ('$client_name', '$client_phone', '$package_name', '$booking_date', '$location_type', '$address', '$notes', 'Pending')";
    
    if (mysqli_query($conn, $query_booking)) {
        $booking_success = true;
        
        // Membuat teks template untuk WhatsApp otomatis
        $wa_message = "Halo DEWA PROJECTS, saya ingin memesan layanan:\n\n"
                    . "Nama: $client_name\n"
                    . "No. HP: $client_phone\n"
                    . "Paket: $package_name\n"
                    . "Tanggal: $booking_date\n"
                    . "Tipe Lokasi: $location_type\n"
                    . "Alamat: $address\n"
                    . "Catatan: $notes\n\n"
                    . "Mohon konfirmasi jadwal ketersediaannya. Terima kasih!";
        $wa_encoded = urlencode($wa_message);
        // Ganti nomor di bawah ini dengan nomor WA bisnis DEWA PROJECTS Anda (gunakan kode negara, misal: 628123456789)
        $wa_link = "https://api.whatsapp.com/send?phone=628123456789&text=" . $wa_encoded;
    } else {
        $booking_error = "Gagal menyimpan pemesanan: " . mysqli_error($conn);
    }
}

// 3. Logika Tambah Paket Baru dari Admin Panel
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'add_package') {
    $package_name = mysqli_real_escape_string($conn, $_POST['package_name']);
    $price = floatval($_POST['price']);
    $category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
    $features = mysqli_real_escape_string($conn, $_POST['features']);

    $query_add_pkg = "INSERT INTO packages (package_name, price, category_name, features) 
                      VALUES ('$package_name', $price, '$category_name', '$features')";
    mysqli_query($conn, $query_add_pkg);
    header("Location: index.php#admin-panel"); // Redirect ke seksi admin agar halaman ter-refresh
    exit();
}

// 4. Logika Hapus Paket dari Admin Panel
if (isset($_GET['delete_package'])) {
    $id_to_delete = intval($_GET['delete_package']);
    mysqli_query($conn, "DELETE FROM packages WHERE id = $id_to_delete");
    header("Location: index.php#admin-panel");
    exit();
}

// 5. Logika Tambah Galeri Proyek Baru dari Admin Panel
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'add_gallery') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
    
    // Memproses upload foto dan mengubahnya ke Base64 agar aman disimpan di GitHub/Database tanpa kehilangan file fisik
    if (isset($_FILES['project_image']) && $_FILES['project_image']['tmp_name'] != '') {
        $image_data = file_get_contents($_FILES['project_image']['tmp_name']);
        $image_type = $_FILES['project_image']['type'];
        $base64_image = 'data:' . $image_type . ';base64,' . base64_encode($image_data);
        
        $query_add_gal = "INSERT INTO project_gallery (title, description, image_base64, category_name) 
                          VALUES ('$title', '$description', '$base64_image', '$category_name')";
        mysqli_query($conn, $query_add_gal);
    }
    header("Location: index.php#admin-panel");
    exit();
}

// 6. Logika Hapus Galeri dari Admin Panel
if (isset($_GET['delete_gallery'])) {
    $id_to_delete = intval($_GET['delete_gallery']);
    mysqli_query($conn, "DELETE FROM project_gallery WHERE id = $id_to_delete");
    header("Location: index.php#admin-panel");
    exit();
}

// 7. Ambil Data Paket Layanan dari Database (Gunakan data bawaan jika tabel kosong)
$result_packages = mysqli_query($conn, "SELECT * FROM packages ORDER BY id DESC");
$packages = [];
while ($row = mysqli_fetch_assoc($result_packages)) {
    $packages[] = $row;
}

if (count($packages) === 0) {
    // Paket Default jika database masih kosong saat pertama kali dijalankan
    $packages = [
        [
            'id' => 'def1',
            'package_name' => 'Instalasi Listrik Rumah Tinggal',
            'price' => 1500000,
            'category_name' => 'Kelistrikan',
            'features' => 'Pemasangan hingga 10 titik lampu, Instalasi MCB Box baru, Tes beban aman, Sertifikasi instalasi dasar'
        ],
        [
            'id' => 'def2',
            'package_name' => 'Sistem Keamanan CCTV Pro',
            'price' => 3500000,
            'category_name' => 'CCTV',
            'features' => '4 Kamera Outdoor/Indoor 2MP, DVR 1TB (Perekaman 2 minggu), Instalasi kabel rapi, Setting online ke HP Anda'
        ],
        [
            'id' => 'def3',
            'package_name' => 'Instalasi Sound System Masjid / Aula',
            'price' => 5000000,
            'category_name' => 'Audio & Speaker',
            'features' => 'Pemasangan 4 Column Speaker, Amplifier Mixer, Setelan Feedback Eliminator, Free 2 Mic Kabel/Wireless'
        ]
    ];
}

// 8. Ambil Data Galeri Proyek dari Database (Gunakan data bawaan jika tabel kosong)
$result_gallery = mysqli_query($conn, "SELECT * FROM project_gallery ORDER BY id DESC");
$galleries = [];
while ($row = mysqli_fetch_assoc($result_gallery)) {
    $galleries[] = $row;
}

if (count($galleries) === 0) {
    // Galeri default jika database kosong
    $galleries = [
        [
            'id' => 'defg1',
            'title' => 'Pemasangan Sound System Kafe Sunset',
            'description' => 'Instalasi speaker dinding estetik & setting equalizer suara jernih bergaransi.',
            'category_name' => 'Audio & Speaker',
            'image_base64' => 'https://images.unsplash.com/photo-1545128485-c400e7702796?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'id' => 'defg2',
            'title' => 'Instalasi CCTV Kompleks Ruko Mas',
            'description' => 'Pemasangan 16 titik IP Camera beresolusi tinggi terkoneksi monitoring pusat.',
            'category_name' => 'CCTV',
            'image_base64' => 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'id' => 'defg3',
            'title' => 'Peremajaan Kabel Listrik Gedung Serbaguna',
            'description' => 'Merestrukturisasi kabel distribusi beban utama guna menghindari korsleting listrik.',
            'category_name' => 'Kelistrikan',
            'image_base64' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=600&q=80'
        ]
    ];
}

// 9. Ambil Data Pesanan Masuk (Khusus untuk Dashboard Admin)
$result_bookings = mysqli_query($conn, "SELECT * FROM bookings ORDER BY id DESC");
$bookings = [];
while ($row = mysqli_fetch_assoc($result_bookings)) {
    $bookings[] = $row;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEWA PROJECTS - Maintenance & New Projects</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        html { scroll-behavior: smooth; }
        .tab-active { border-color: #3b82f6; color: #3b82f6; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- NAVIGASI UTAMA -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Bagian Logo Resmi -->
                <div class="flex items-center space-x-3">
                    <img src="ChatGPT Image 28 Mei 2026, 00.04.15.png" alt="Logo DEWA PROJECTS" class="h-14 w-auto object-contain" onerror="this.src='https://via.placeholder.com/150x50?text=DEWA+PROJECTS'">
                </div>
                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-8 items-center font-medium">
                    <a href="#beranda" class="text-gray-600 hover:text-blue-600 transition">Beranda</a>
                    <a href="#layanan" class="text-gray-600 hover:text-blue-600 transition">Layanan</a>
                    <a href="#paket" class="text-gray-600 hover:text-blue-600 transition">Paket Jasa</a>
                    <a href="#galeri" class="text-gray-600 hover:text-blue-600 transition">Galeri</a>
                    <a href="#pemesanan" class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition shadow">Pesan Sekarang</a>
                    <a href="#admin-panel" class="text-gray-400 hover:text-gray-600" title="Admin Panel"><i data-lucide="shield-alert" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- NOTIFIKASI PEMESANAN BERHASIL -->
    <?php if ($booking_success): ?>
        <div class="max-w-3xl mx-auto mt-6 px-4">
            <div class="bg-emerald-100 border-2 border-emerald-500 text-emerald-900 px-6 py-4 rounded-xl shadow-lg relative" role="alert">
                <div class="flex items-center space-x-3">
                    <i data-lucide="check-circle" class="w-8 h-8 text-emerald-600 shrink-0"></i>
                    <div>
                        <strong class="font-bold text-lg">Pemesanan Anda Berhasil Dicatat!</strong>
                        <p class="text-sm mt-1">Sistem kami telah menyimpan data booking Anda ke database. Silakan klik tombol di bawah untuk meneruskan pesanan secara instan ke admin via WhatsApp.</p>
                        <a href="<?php echo $wa_link; ?>" target="_blank" class="mt-3 inline-flex items-center space-x-2 bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg font-semibold transition shadow-md">
                            <i data-lucide="message-square" class="w-4 h-4"></i>
                            <span>Hubungi Admin di WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- HERO SECTION (BERANDA) -->
    <header id="beranda" class="bg-gradient-to-r from-slate-900 to-blue-900 text-white py-24 px-4 relative overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">
            <div class="space-y-6">
                <span class="bg-blue-500/20 text-blue-400 px-4 py-1.5 rounded-full text-sm font-semibold tracking-wider uppercase">Solusi Infrastruktur Terpercaya</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight">DEWA PROJECTS</h1>
                <p class="text-lg text-slate-300">Spesialis instalasi kelistrikan, sistem keamanan CCTV terintegrasi, jaringan plumbing perpipaan, serta instalasi sound & speaker system profesional untuk gedung, kantor, dan rumah tinggal Anda.</p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#pemesanan" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-bold transition shadow-lg flex items-center space-x-2">
                        <span>Pesan Jasa Jauh Lebih Praktis</span>
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#layanan" class="border border-slate-500 hover:border-white text-white px-8 py-4 rounded-xl font-bold transition">Pelajari Layanan Kami</a>
                </div>
            </div>
            <div class="hidden md:flex justify-center">
                <!-- Representasi logo besar sebagai grafis latar hero -->
                <div class="relative bg-white/5 p-8 rounded-3xl border border-white/10 backdrop-blur-lg">
                    <img src="ChatGPT Image 28 Mei 2026, 00.04.15.png" alt="Dewa Projects Graphic" class="max-w-md h-auto object-contain rounded-2xl">
                </div>
            </div>
        </div>
    </header>

    <!-- SPESIALISASI LAYANAN (SERVICES) -->
    <section id="layanan" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Spesialisasi Keahlian Kami</h2>
                <p class="text-gray-600 mt-4 text-lg">Dengan tim teknisi ahli bersertifikasi, DEWA PROJECTS siap melayani pengerjaan proyek baru maupun pemeliharaan rutin secara presisi.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Jasa 1 -->
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition duration-300 group">
                    <div class="w-14 h-14 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="zap" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">Instalasi Listrik</h3>
                    <p class="text-gray-600 text-sm">Pemasangan panel distribusi beban, renovasi kabel utama gedung, penanganan korsleting, serta sertifikasi keselamatan daya.</p>
                </div>
                <!-- Jasa 2 -->
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition duration-300 group">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="shield" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">Sistem CCTV</h3>
                    <p class="text-gray-600 text-sm">Perancangan arsitektur pemantauan IP Camera, pemasangan DVR terpusat, setup akses online smartphone, hingga perawatan lensa berkala.</p>
                </div>
                <!-- Jasa 3 -->
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition duration-300 group">
                    <div class="w-14 h-14 bg-cyan-100 text-cyan-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="droplet" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">Plumbing (Perpipaan)</h3>
                    <p class="text-gray-600 text-sm">Instalasi pemipaan air bersih & kotor, perbaikan pompa air, pemasangan filter filtrasi air, serta penanganan kebocoran struktural.</p>
                </div>
                <!-- Jasa 4 -->
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition duration-300 group">
                    <div class="w-14 h-14 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="volume-2" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">Speaker & Audio</h3>
                    <p class="text-gray-600 text-sm">Pemasangan sound system ruang rapat, masjid, kafe, hingga aula pertemuan dengan kalibrasi akustik ruangan presisi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- DAFTAR PAKET JASA (REAL-TIME DARI DATABASE) -->
    <section id="paket" class="py-20 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold">Paket Pilihan Terbaik Untuk Anda</h2>
                <p class="text-slate-400 mt-4 text-lg">Solusi hemat dengan estimasi biaya transparan dan cakupan pengerjaan yang lengkap.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($packages as $pkg): ?>
                    <div class="bg-slate-800 rounded-3xl p-8 border border-slate-700 flex flex-col justify-between hover:shadow-2xl hover:border-blue-500 transition duration-300">
                        <div>
                            <span class="bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                                <?php echo htmlspecialchars($pkg['category_name']); ?>
                            </span>
                            <h3 class="text-2xl font-bold mt-4 mb-2"><?php echo htmlspecialchars($pkg['package_name']); ?></h3>
                            <div class="my-6">
                                <span class="text-3xl font-extrabold text-blue-400">Rp <?php echo number_format($pkg['price'], 0, ',', '.'); ?></span>
                                <span class="text-slate-400 text-sm">/ paket</span>
                            </div>
                            <ul class="space-y-3 border-t border-slate-700 pt-6 mb-8">
                                <?php 
                                $feat_list = explode(',', $pkg['features']);
                                foreach($feat_list as $feature): 
                                    if(trim($feature) != ''):
                                ?>
                                    <li class="flex items-start space-x-3 text-slate-300 text-sm">
                                        <i data-lucide="check" class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5"></i>
                                        <span><?php echo htmlspecialchars(trim($feature)); ?></span>
                                    </li>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </ul>
                        </div>
                        <a href="#pemesanan" onclick="selectPackage('<?php echo htmlspecialchars($pkg['package_name']); ?>')" class="w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl transition block shadow-lg">
                            Pesan Paket Ini
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- GALERI PROYEK (REAL-TIME DARI DATABASE) -->
    <section id="galeri" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Galeri Proyek Selesai</h2>
                <p class="text-gray-600 mt-4 text-lg">Bukti komitmen dan kualitas hasil kerja nyata dari seluruh pengerjaan tim DEWA PROJECTS.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($galleries as $gal): ?>
                    <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 hover:shadow-xl transition duration-300">
                        <img src="<?php echo $gal['image_base64']; ?>" alt="<?php echo htmlspecialchars($gal['title']); ?>" class="w-full h-56 object-cover hover:scale-105 transition duration-500">
                        <div class="p-6">
                            <span class="text-xs font-bold text-blue-600 uppercase tracking-wide">
                                <?php echo htmlspecialchars($gal['category_name']); ?>
                            </span>
                            <h3 class="text-xl font-bold mt-2 text-slate-900"><?php echo htmlspecialchars($gal['title']); ?></h3>
                            <p class="text-gray-600 text-sm mt-2"><?php echo htmlspecialchars($gal['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FORMULIR PEMESANAN (BOOKING) -->
    <section id="pemesanan" class="py-20 bg-blue-50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-blue-100">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-extrabold text-slate-900">Formulir Pemesanan Jasa</h2>
                    <p class="text-gray-600 mt-2">Isi data di bawah ini untuk mengatur jadwal survei lokasi dan pengerjaan.</p>
                </div>
                
                <form action="index.php#pemesanan" method="POST" class="space-y-6">
                    <input type="hidden" name="action" value="book_service">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap Anda</label>
                            <input type="text" name="client_name" required placeholder="Contoh: Budi Santoso" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nomor WhatsApp Aktif</label>
                            <input type="tel" name="client_phone" required placeholder="Contoh: 08123456789" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Pilih Paket Layanan</label>
                            <select id="package_select" name="package_name" required class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white">
                                <option value="">-- Silakan Pilih Jasa --</option>
                                <?php foreach ($packages as $pkg): ?>
                                    <option value="<?php echo htmlspecialchars($pkg['package_name']); ?>">
                                        <?php echo htmlspecialchars($pkg['package_name']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Rencana Tanggal Pengerjaan</label>
                            <input type="date" name="booking_date" required class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Tipe Lokasi</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <label class="flex items-center space-x-2 border border-gray-200 p-3 rounded-xl cursor-pointer hover:bg-slate-50 transition">
                                <input type="radio" name="location_type" value="Rumah" required class="text-blue-600 focus:ring-blue-500">
                                <span class="text-sm">Rumah</span>
                            </label>
                            <label class="flex items-center space-x-2 border border-gray-200 p-3 rounded-xl cursor-pointer hover:bg-slate-50 transition">
                                <input type="radio" name="location_type" value="Kantor" class="text-blue-600 focus:ring-blue-500">
                                <span class="text-sm">Kantor</span>
                            </label>
                            <label class="flex items-center space-x-2 border border-gray-200 p-3 rounded-xl cursor-pointer hover:bg-slate-50 transition">
                                <input type="radio" name="location_type" value="Ruko / Toko" class="text-blue-600 focus:ring-blue-500">
                                <span class="text-sm">Ruko / Toko</span>
                            </label>
                            <label class="flex items-center space-x-2 border border-gray-200 p-3 rounded-xl cursor-pointer hover:bg-slate-50 transition">
                                <input type="radio" name="location_type" value="Fasilitas Umum" class="text-blue-600 focus:ring-blue-500">
                                <span class="text-sm">Fasilitas Umum</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Alamat Lengkap Lokasi Proyek</label>
                        <textarea name="address" required rows="3" placeholder="Masukkan alamat lengkap serta petunjuk lokasi pengerjaan..." class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Catatan Tambahan (Opsional)</label>
                        <textarea name="notes" rows="2" placeholder="Tuliskan jika ada kendala atau instruksi khusus teknisi..." class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl transition shadow-lg flex items-center justify-center space-x-2">
                        <i data-lucide="send" class="w-5 h-5"></i>
                        <span>Kirim Permohonan Booking & Buka WA</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- ADMIN PANEL / DASHBOARD (DATABASE CONTROL) -->
    <section id="admin-panel" class="py-20 bg-slate-100 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="bg-slate-900 text-white p-6 md:p-8 flex justify-between items-center flex-wrap gap-4">
                    <div>
                        <h2 class="text-2xl font-extrabold flex items-center space-x-2">
                            <i data-lucide="shield" class="w-7 h-7 text-blue-500"></i>
                            <span>Admin Panel DEWA PROJECTS</span>
                        </h2>
                        <p class="text-slate-400 text-sm mt-1">Menggunakan database MySQL aktif via koneksi.php</p>
                    </div>
                    <!-- Tab Menu Admin -->
                    <div class="flex space-x-2 border-b border-slate-800" id="admin-tabs">
                        <button onclick="switchTab('tab-pesanan')" id="btn-tab-pesanan" class="px-4 py-2 text-sm font-bold border-b-2 tab-active transition">Daftar Pesanan</button>
                        <button onclick="switchTab('tab-paket')" id="btn-tab-paket" class="px-4 py-2 text-sm font-bold border-b-2 border-transparent text-slate-400 hover:text-white transition">Update Paket</button>
                        <button onclick="switchTab('tab-galeri')" id="btn-tab-galeri" class="px-4 py-2 text-sm font-bold border-b-2 border-transparent text-slate-400 hover:text-white transition">Update Galeri</button>
                    </div>
                </div>

                <div class="p-6 md:p-8">
                    <!-- SUB-TAB 1: DAFTAR PESANAN DARI KLIEN -->
                    <div id="tab-pesanan" class="admin-content space-y-6">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-bold text-slate-900">Antrean Pesanan Masuk (Real Database)</h3>
                            <span class="bg-blue-100 text-blue-800 text-xs font-bold px-3 py-1 rounded-full">
                                Total: <?php echo count($bookings); ?> Pesanan
                            </span>
                        </div>
                        
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="border-b border-gray-200 text-sm font-bold text-slate-500 bg-slate-50">
                                        <th class="p-4">Tanggal Masuk</th>
                                        <th class="p-4">Nama Pelanggan</th>
                                        <th class="p-4">Paket Layanan</th>
                                        <th class="p-4">Lokasi / Alamat</th>
                                        <th class="p-4">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 text-sm">
                                    <?php if(count($bookings) == 0): ?>
                                        <tr>
                                            <td colspan="5" class="p-8 text-center text-gray-400">Belum ada data pemesanan yang terekam di database.</td>
                                        </tr>
                                    <?php else: ?>
                                        <?php foreach ($bookings as $b): ?>
                                            <tr class="hover:bg-slate-50">
                                                <td class="p-4 font-medium text-slate-900"><?php echo htmlspecialchars($b['created_at']); ?></td>
                                                <td class="p-4">
                                                    <div class="font-bold"><?php echo htmlspecialchars($b['client_name']); ?></div>
                                                    <div class="text-xs text-gray-500"><?php echo htmlspecialchars($b['client_phone']); ?></div>
                                                </td>
                                                <td class="p-4">
                                                    <span class="bg-gray-100 text-slate-800 text-xs px-2.5 py-1 rounded-lg font-medium">
                                                        <?php echo htmlspecialchars($b['package_name']); ?>
                                                    </span>
                                                </td>
                                                <td class="p-4 max-w-xs">
                                                    <span class="text-xs font-bold text-blue-600 block">[<?php echo htmlspecialchars($b['location_type']); ?>]</span>
                                                    <span class="text-gray-600 line-clamp-2"><?php echo htmlspecialchars($b['address']); ?></span>
                                                </td>
                                                <td class="p-4">
                                                    <span class="bg-amber-100 text-amber-800 text-xs px-2.5 py-1 rounded-full font-bold">
                                                        <?php echo htmlspecialchars($b['status']); ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- SUB-TAB 2: MANAJEMEN PAKET -->
                    <div id="tab-paket" class="admin-content space-y-8 hidden">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            <!-- Form Tambah Paket -->
                            <div class="bg-slate-50 p-6 rounded-2xl border border-gray-200">
                                <h3 class="text-lg font-bold mb-4 text-slate-950">Tambah Paket Baru</h3>
                                <form action="index.php#admin-panel" method="POST" class="space-y-4">
                                    <input type="hidden" name="action" value="add_package">
                                    <div>
                                        <label class="block text-xs font-bold text-slate-700 mb-1">Nama Paket Jasa</label>
                                        <input type="text" name="package_name" required placeholder="Contoh: Paket CCTV 4 Kamera" class="w-full px-3 py-2 text-sm border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-700 mb-1">Kategori Jasa</label>
                                        <select name="category_name" required class="w-full px-3 py-2 text-sm border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white">
                                            <option value="Kelistrikan">Kelistrikan</option>
                                            <option value="CCTV">CCTV</option>
                                            <option value="Plumbing">Plumbing</option>
                                            <option value="Audio & Speaker">Audio & Speaker</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-700 mb-1">Harga Estimasi (Rp)</label>
                                        <input type="number" name="price" required placeholder="Contoh: 1500000" class="w-full px-3 py-2 text-sm border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-700 mb-1">Fitur & Manfaat (Pisahkan dengan tanda koma)</label>
                                        <textarea name="features" required rows="3" placeholder="Contoh: Garansi 1 tahun, Gratis kabel 10m, Setting HP gratis" class="w-full px-3 py-2 text-sm border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                                    </div>
                                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 text-sm rounded-xl transition">
                                        Simpan ke MySQL
                                    </button>
                                </form>
                            </div>

                            <!-- Daftar Paket Terdaftar -->
                            <div class="lg:col-span-2 space-y-4">
                                <h3 class="text-lg font-bold text-slate-950">Daftar Paket di Database Anda</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <?php foreach ($packages as $p): ?>
                                        <div class="border border-gray-200 p-4 rounded-xl flex justify-between items-start">
                                            <div>
                                                <span class="text-xs font-bold text-blue-600"><?php echo htmlspecialchars($p['category_name']); ?></span>
                                                <h4 class="font-bold text-slate-900 mt-1"><?php echo htmlspecialchars($p['package_name']); ?></h4>
                                                <p class="text-sm font-semibold text-slate-700 mt-1">Rp <?php echo number_format($p['price'], 0, ',', '.'); ?></p>
                                            </div>
                                            <?php if (is_numeric($p['id'])): // Hanya izinkan hapus data dari database asli ?>
                                                <a href="index.php?delete_package=<?php echo $p['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini dari MySQL?')" class="text-rose-500 hover:text-rose-700 p-1">
                                                    <i data-lucide="trash-2" class="w-5 h-5"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SUB-TAB 3: MANAJEMEN GALERI -->
                    <div id="tab-galeri" class="admin-content space-y-8 hidden">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            <!-- Form Tambah Galeri -->
                            <div class="bg-slate-50 p-6 rounded-2xl border border-gray-200">
                                <h3 class="text-lg font-bold mb-4 text-slate-950">Upload Foto Proyek Baru</h3>
                                <form action="index.php#admin-panel" method="POST" enctype="multipart/form-data" class="space-y-4">
                                    <input type="hidden" name="action" value="add_gallery">
                                    <div>
                                        <label class="block text-xs font-bold text-slate-700 mb-1">Judul Proyek</label>
                                        <input type="text" name="title" required placeholder="Contoh: Instalasi Audio Aula Kantor X" class="w-full px-3 py-2 text-sm border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-700 mb-1">Kategori Proyek</label>
                                        <select name="category_name" required class="w-full px-3 py-2 text-sm border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white">
                                            <option value="Kelistrikan">Kelistrikan</option>
                                            <option value="CCTV">CCTV</option>
                                            <option value="Plumbing">Plumbing</option>
                                            <option value="Audio & Speaker">Audio & Speaker</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-700 mb-1">Deskripsi Singkat Kerja</label>
                                        <textarea name="description" required rows="2" placeholder="Jelaskan pengerjaan yang dilakukan..." class="w-full px-3 py-2 text-sm border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-slate-700 mb-1">Pilih File Foto</label>
                                        <input type="file" name="project_image" accept="image/*" required class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                    </div>
                                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 text-sm rounded-xl transition">
                                        Upload & Simpan MySQL
                                    </button>
                                </form>
                            </div>

                            <!-- Daftar Galeri Terdaftar -->
                            <div class="lg:col-span-2 space-y-4">
                                <h3 class="text-lg font-bold text-slate-955">Daftar Foto Galeri di Database</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <?php foreach ($galleries as $g): ?>
                                        <div class="border border-gray-200 p-3 rounded-xl flex items-center space-x-4">
                                            <img src="<?php echo $g['image_base64']; ?>" class="w-16 h-16 object-cover rounded-lg shrink-0">
                                            <div class="flex-grow min-w-0">
                                                <span class="text-xs font-bold text-blue-600 block"><?php echo htmlspecialchars($g['category_name']); ?></span>
                                                <h4 class="font-bold text-slate-900 truncate"><?php echo htmlspecialchars($g['title']); ?></h4>
                                            </div>
                                            <?php if (is_numeric($g['id'])): ?>
                                                <a href="index.php?delete_gallery=<?php echo $g['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus foto proyek ini dari database?')" class="text-rose-500 hover:text-rose-700 p-1">
                                                    <i data-lucide="trash-2" class="w-5 h-5"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 text-center space-y-4">
            <div class="flex justify-center">
                <img src="ChatGPT Image 28 Mei 2026, 00.04.15.png" alt="Logo Dewa Projects" class="h-16 w-auto object-contain">
            </div>
            <p class="max-w-md mx-auto text-sm text-slate-400">Penyedia jasa instalasi kelistrikan, sound system, CCTV, plumbing modern bergaransi penuh.</p>
            <div class="border-t border-slate-800 pt-6 text-xs">
                &copy; 2026 DEWA PROJECTS. Seluruh Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    <!-- LOGIKA JAVASCRIPT WEBSITE -->
    <script>
        // Inisialisasi ikon Lucide
        lucide.createIcons();

        // Fungsi memilih paket dari kartu penawaran ke form booking
        function selectPackage(packageName) {
            const selectEl = document.getElementById('package_select');
            selectEl.value = packageName;
        }

        // Fungsi beralih menu tab di Panel Admin
        function switchTab(tabId) {
            // Sembunyikan semua konten sub-tab admin
            document.querySelectorAll('.admin-content').forEach(el => el.classList.add('hidden'));
            
            // Tampilkan sub-tab aktif
            document.getElementById(tabId).classList.remove('hidden');

            // Setel styling tombol aktif
            document.querySelectorAll('#admin-tabs button').forEach(btn => {
                btn.classList.remove('tab-active', 'text-slate-900', 'border-blue-600');
                btn.classList.add('border-transparent', 'text-slate-400');
            });

            // Aktifkan tombol yang dipilih
            const activeBtn = document.getElementById('btn-' + tabId);
            activeBtn.classList.add('tab-active', 'text-slate-900');
            activeBtn.classList.remove('border-transparent', 'text-slate-400');
        }
    </script>
</body>
</html>