<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEWA PROJECTS - Maintenance & New Projects</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandBlue: '#005eff',
                        brandDark: '#1f2937',
                        brandGray: '#3f3f3f',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        html {
            scroll-behavior: smooth;
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #005eff;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #004ecc;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans leading-normal tracking-normal">

    <!-- HEADER / NAVIGATION -->
    <header class="sticky top-0 z-40 bg-white shadow-md border-b border-gray-100">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <a href="#" onclick="showSection('client-area')" class="flex items-center space-x-3 group">
                <!-- LOGO REFERENCING THE SPECIFIED FILE NAME -->
                <img src="ChatGPT Image 28 Mei 2026, 00.04.15.png" alt="DEWA PROJECTS Logo" class="h-12 w-auto object-contain transition-transform group-hover:scale-105">
                <div class="hidden md:block">
                    <span class="block text-lg font-extrabold text-brandBlue tracking-wider leading-none">DEWA PROJECTS</span>
                    <span class="text-[10px] text-gray-500 font-semibold tracking-widest uppercase">Maintenance & New Projects</span>
                </div>
            </a>
            
            <!-- Mobile Menu Toggle Button -->
            <button onclick="toggleMobileMenu()" class="md:hidden text-gray-600 focus:outline-none focus:text-brandBlue">
                <i class="fa-solid fa-bars text-2xl" id="menu-icon"></i>
            </button>

            <!-- Navigation Links -->
            <nav id="nav-menu" class="hidden md:flex items-center space-x-8 font-semibold text-gray-700">
                <a href="#hero" onclick="showSection('client-area')" class="hover:text-brandBlue transition duration-200">Beranda</a>
                <a href="#about" onclick="showSection('client-area')" class="hover:text-brandBlue transition duration-200">Tentang Kami</a>
                <a href="#packages" onclick="showSection('client-area')" class="hover:text-brandBlue transition duration-200">Paket Layanan</a>
                <a href="#gallery" onclick="showSection('client-area')" class="hover:text-brandBlue transition duration-200">Portofolio</a>
                <a href="#booking" onclick="showSection('client-area')" class="bg-brandBlue text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 transition duration-300 shadow-md shadow-blue-200">Pesan Sekarang</a>
                <button onclick="showAdminLogin()" class="flex items-center space-x-1.5 text-gray-600 hover:text-brandBlue transition border-l pl-6 border-gray-200">
                    <i class="fa-solid fa-user-gear"></i>
                    <span>Admin Area</span>
                </button>
            </nav>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 py-3 space-y-3 shadow-inner">
            <a href="#hero" onclick="closeMobileMenu(); showSection('client-area')" class="block py-2 text-gray-700 hover:text-brandBlue font-medium">Beranda</a>
            <a href="#about" onclick="closeMobileMenu(); showSection('client-area')" class="block py-2 text-gray-700 hover:text-brandBlue font-medium">Tentang Kami</a>
            <a href="#packages" onclick="closeMobileMenu(); showSection('client-area')" class="block py-2 text-gray-700 hover:text-brandBlue font-medium">Paket Layanan</a>
            <a href="#gallery" onclick="closeMobileMenu(); showSection('client-area')" class="block py-2 text-gray-700 hover:text-brandBlue font-medium">Portofolio</a>
            <a href="#booking" onclick="closeMobileMenu(); showSection('client-area')" class="block py-2 text-center bg-brandBlue text-white rounded-lg font-semibold shadow-md">Pesan Sekarang</a>
            <hr class="border-gray-100 my-2">
            <button onclick="closeMobileMenu(); showAdminLogin()" class="w-full flex items-center justify-center space-x-2 py-2 text-gray-600 hover:text-brandBlue font-medium">
                <i class="fa-solid fa-user-gear"></i>
                <span>Admin Panel</span>
            </button>
        </div>
    </header>

    <!-- CLIENT AREA (PUBLIC VIEW) -->
    <main id="client-area" class="block">
        
        <!-- HERO SECTION -->
        <section id="hero" class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-brandDark text-white py-24 md:py-32 overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-900/40 via-transparent to-transparent"></div>
            <!-- Decorative Abstract Elements -->
            <div class="absolute -top-12 -left-12 w-64 h-64 bg-blue-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-brandBlue/10 rounded-full blur-3xl"></div>
            
            <div class="container mx-auto px-4 relative z-10 flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="w-full md:w-1/2 text-left space-y-6">
                    <div class="inline-flex items-center space-x-2 bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-xs font-semibold tracking-wider uppercase">
                        <span class="w-2 h-2 bg-blue-400 rounded-full animate-ping"></span>
                        <span>Partner Infrastruktur Terbaik Anda</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                        Solusi <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Maintenance & Instalasi</span> Profesional
                    </h1>
                    <p class="text-gray-300 text-lg md:text-xl max-w-lg leading-relaxed">
                        DEWA PROJECTS menghadirkan jasa pemasangan profesional mulai dari Speaker System, Instalasi Listrik, CCTV, Plumbing, dan konstruksi proyek baru dengan standar kualitas tinggi.
                    </p>
                    <div class="flex flex-col sm:flex-row items-start gap-4 pt-4">
                        <a href="#booking" class="w-full sm:w-auto text-center px-8 py-4 bg-brandBlue hover:bg-blue-600 rounded-xl font-bold shadow-lg shadow-blue-900/30 transition-all duration-300 hover:-translate-y-1">
                            Pesan Jasa Sekarang <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                        <a href="#packages" class="w-full sm:w-auto text-center px-8 py-4 bg-slate-800/80 hover:bg-slate-700/80 border border-slate-700 rounded-xl font-semibold transition-all duration-300">
                            Lihat Katalog Paket
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                    <!-- Elegant Display featuring DEWA PROJECTS Visual Branding representation -->
                    <div class="relative w-full max-w-md p-1 bg-gradient-to-tr from-brandBlue to-cyan-400 rounded-3xl shadow-2xl">
                        <div class="bg-slate-900/90 rounded-[22px] p-6 text-left space-y-6">
                            <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                                <span class="font-extrabold text-lg text-brandBlue">Layanan Unggulan</span>
                                <i class="fa-solid fa-screwdriver-wrench text-cyan-400 text-xl"></i>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <div class="w-10 h-10 bg-blue-500/10 text-brandBlue flex items-center justify-center rounded-xl font-semibold">
                                        <i class="fa-solid fa-volume-high text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm">Speaker & Sound Installation</h4>
                                        <p class="text-xs text-gray-400">Instalasi audio komersial & residensial</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-10 h-10 bg-yellow-500/10 text-yellow-400 flex items-center justify-center rounded-xl font-semibold">
                                        <i class="fa-solid fa-bolt text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm">Electrical Maintenance</h4>
                                        <p class="text-xs text-gray-400">Panel listrik harian, perkabelan & perbaikan</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-10 h-10 bg-green-500/10 text-green-400 flex items-center justify-center rounded-xl font-semibold">
                                        <i class="fa-solid fa-video text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm">CCTV & Security System</h4>
                                        <p class="text-xs text-gray-400">Sistem pantau 24/7 dengan koneksi online</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-10 h-10 bg-teal-500/10 text-teal-400 flex items-center justify-center rounded-xl font-semibold">
                                        <i class="fa-solid fa-faucet text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm">Plumbing & Pipings</h4>
                                        <p class="text-xs text-gray-400">Pemasangan pompa, tandon, & instalasi pipa air</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS SECTION -->
        <section class="bg-white py-12 relative -mt-10 rounded-t-[40px] shadow-sm z-20 border-b border-gray-100">
            <div class="container mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <span class="block text-4xl font-extrabold text-brandBlue">150+</span>
                    <span class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Proyek Selesai</span>
                </div>
                <div>
                    <span class="block text-4xl font-extrabold text-brandBlue">99%</span>
                    <span class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Klien Puas</span>
                </div>
                <div>
                    <span class="block text-4xl font-extrabold text-brandBlue">12+</span>
                    <span class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Teknisi Ahli</span>
                </div>
                <div>
                    <span class="block text-4xl font-extrabold text-brandBlue">24/7</span>
                    <span class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Layanan Darurat</span>
                </div>
            </div>
        </section>

        <!-- ABOUT SECTION -->
        <section id="about" class="py-20 bg-gray-50">
            <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2 relative">
                    <!-- Representation image representing a team of expert technicians working on maintenance -->
                    <div class="relative w-full h-[400px] rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80" alt="Instalasi Listrik Profesional" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <p class="text-xs uppercase tracking-widest text-blue-400 font-bold mb-1">Standar Keamanan Tinggi</p>
                            <h3 class="text-2xl font-bold">Kualitas Kerja yang Terjamin</h3>
                        </div>
                    </div>
                    <!-- Small absolute card -->
                    <div class="absolute -bottom-8 -right-8 hidden md:block bg-white p-6 rounded-2xl shadow-xl max-w-[240px] border border-gray-100">
                        <div class="flex items-center space-x-3 text-brandBlue mb-2">
                            <i class="fa-solid fa-shield-halved text-2xl"></i>
                            <span class="font-extrabold">DEWA PROTECT</span>
                        </div>
                        <p class="text-xs text-gray-500">Seluruh pengerjaan mendapatkan garansi perawatan resmi pasca-konstruksi.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 space-y-6">
                    <span class="text-brandBlue font-extrabold tracking-wider uppercase text-sm">Tentang DEWA PROJECTS</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight">
                        Mitra Andal untuk Proyek Konstruksi & Pemeliharaan Anda
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Didirikan dengan komitmen untuk memberikan layanan pengerjaan infrastruktur sipil, mekanikal, dan elektrikal dengan tingkat akurasi tinggi. Kami melayani kebutuhan rumah tinggal pribadi, cafe, perkantoran, ruko, hingga gedung komersial.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                        <div class="flex items-start space-x-3">
                            <i class="fa-solid fa-circle-check text-brandBlue mt-1"></i>
                            <div>
                                <h4 class="font-bold text-gray-800">Transparan & Jujur</h4>
                                <p class="text-sm text-gray-500">Rincian biaya jelas, no hidden cost.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fa-solid fa-circle-check text-brandBlue mt-1"></i>
                            <div>
                                <h4 class="font-bold text-gray-800">Teknisi Tersertifikasi</h4>
                                <p class="text-sm text-gray-500">Dikerjakan oleh spesialis bidangnya.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fa-solid fa-circle-check text-brandBlue mt-1"></i>
                            <div>
                                <h4 class="font-bold text-gray-800">Peralatan Modern</h4>
                                <p class="text-sm text-gray-500">Mempersingkat durasi & menjamin kerapihan.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fa-solid fa-circle-check text-brandBlue mt-1"></i>
                            <div>
                                <h4 class="font-bold text-gray-800">Sistem Tepat Waktu</h4>
                                <p class="text-sm text-gray-500">Estimasi tenggat selesai pengerjaan ketat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PACKAGES SECTION -->
        <section id="packages" class="py-20 bg-white">
            <div class="container mx-auto px-4 text-center">
                <span class="text-brandBlue font-extrabold tracking-wider uppercase text-sm">Pilihan Paket Unggulan</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 mb-4 tracking-tight">Pilih Paket Sesuai Kebutuhan Anda</h2>
                <p class="text-gray-500 max-w-2xl mx-auto mb-16">Kami menyediakan beberapa model paket siap pasang yang hemat biaya, fleksibel, dan terukur.</p>
                
                <!-- Dynamic Card Grid -->
                <div id="packages-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Dynamic Packages will be injected here by JS -->
                </div>
            </div>
        </section>

        <!-- GALLERY SECTION -->
        <section id="gallery" class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-12">
                    <div class="text-left">
                        <span class="text-brandBlue font-extrabold tracking-wider uppercase text-sm">Galeri Proyek</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 tracking-tight">Portofolio Kerja Terbaru</h2>
                    </div>
                    <div id="gallery-filters" class="flex flex-wrap gap-2 mt-4 md:mt-0">
                        <button onclick="filterGallery('Semua')" class="px-4 py-2 rounded-full text-sm font-semibold bg-brandBlue text-white shadow-sm transition">Semua</button>
                        <button onclick="filterGallery('Kelistrikan')" class="px-4 py-2 rounded-full text-sm font-semibold bg-white text-gray-600 hover:bg-gray-100 transition">Listrik</button>
                        <button onclick="filterGallery('CCTV')" class="px-4 py-2 rounded-full text-sm font-semibold bg-white text-gray-600 hover:bg-gray-100 transition">CCTV</button>
                        <button onclick="filterGallery('Plumbing')" class="px-4 py-2 rounded-full text-sm font-semibold bg-white text-gray-600 hover:bg-gray-100 transition">Plumbing</button>
                        <button onclick="filterGallery('Audio & Speaker')" class="px-4 py-2 rounded-full text-sm font-semibold bg-white text-gray-600 hover:bg-gray-100 transition">Audio</button>
                    </div>
                </div>

                <!-- Gallery Grid -->
                <div id="gallery-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Dynamic Project Galleries will be injected here by JS -->
                </div>
            </div>
        </section>

        <!-- BOOKING SECTION -->
        <section id="booking" class="py-20 bg-white relative">
            <div class="container mx-auto px-4 max-w-4xl">
                <div class="bg-gradient-to-br from-slate-900 via-slate-800 to-brandDark rounded-3xl overflow-hidden shadow-2xl flex flex-col md:flex-row">
                    <!-- Booking left info panel -->
                    <div class="w-full md:w-2/5 bg-brandBlue p-8 text-white flex flex-col justify-between">
                        <div class="space-y-6">
                            <h3 class="text-3xl font-extrabold leading-tight">Buat Penjadwalan Survei & Proyek</h3>
                            <p class="text-blue-100 text-sm leading-relaxed">
                                Silakan isi formulir secara lengkap. Admin ahli kami akan segera menghubungi Anda untuk melakukan penjadwalan survei lokasi serta estimasi kerja.
                            </p>
                        </div>
                        <div class="space-y-4 pt-8 border-t border-blue-400/40">
                            <div class="flex items-center space-x-3 text-sm">
                                <i class="fa-solid fa-phone-volume text-lg"></i>
                                <span>+62 812-3456-7890 (WA)</span>
                            </div>
                            <div class="flex items-center space-x-3 text-sm">
                                <i class="fa-solid fa-envelope"></i>
                                <span>info@dewaprojects.com</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Booking form panel -->
                    <form id="bookingForm" onsubmit="handleBookingSubmit(event)" class="w-full md:w-3/5 p-8 space-y-4 bg-white text-left">
                        <h4 class="text-2xl font-bold text-gray-900 mb-4">Formulir Pemesanan</h4>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nama Lengkap</label>
                                <input type="text" id="book_name" required placeholder="Contoh: Budi Santoso" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brandBlue focus:border-brandBlue outline-none text-sm transition">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nomor WhatsApp</label>
                                <input type="tel" id="book_phone" required placeholder="Contoh: 08123456789" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brandBlue focus:border-brandBlue outline-none text-sm transition">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Pilih Paket Layanan</label>
                            <select id="book_package" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brandBlue focus:border-brandBlue outline-none text-sm bg-white transition">
                                <!-- Dynamically populated -->
                            </select>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Pilih Tanggal Rencana Kerja</label>
                                <input type="date" id="book_date" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brandBlue focus:border-brandBlue outline-none text-sm transition">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Jenis Lokasi</label>
                                <select id="book_location_type" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brandBlue focus:border-brandBlue outline-none text-sm bg-white transition">
                                    <option value="Rumah Tinggal">Rumah Tinggal</option>
                                    <option value="Ruko / Kantor">Ruko / Kantor</option>
                                    <option value="Kafe / Restoran">Kafe / Restoran</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Alamat Lokasi Proyek</label>
                            <textarea id="book_address" rows="2" required placeholder="Tuliskan alamat lengkap Anda..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brandBlue focus:border-brandBlue outline-none text-sm transition"></textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Catatan Tambahan (Spesifikasi khusus dll)</label>
                            <textarea id="book_notes" rows="2" placeholder="Contoh: Merk kabel tertentu, ketinggian instalasi dll..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brandBlue focus:border-brandBlue outline-none text-sm transition"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-brandBlue hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-xl transition duration-300 shadow-md shadow-blue-200">
                            <i class="fa-solid fa-paper-plane mr-2"></i> Kirim Pesanan Sekarang
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-slate-900 text-gray-400 py-16 border-t border-slate-800">
            <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-12 text-left">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <img src="ChatGPT Image 28 Mei 2026, 00.04.15.png" alt="Logo" class="h-10 w-auto bg-white p-1 rounded">
                        <span class="text-xl font-extrabold text-white">DEWA PROJECTS</span>
                    </div>
                    <p class="text-sm">
                        Partner handal dalam pemeliharaan instalasi gedung, kelistrikan, tata suara audio, plumbing, dan konstruksi baru. Terpercaya & Profesional.
                    </p>
                </div>
                <div>
                    <h5 class="text-white font-bold text-lg mb-4">Layanan Kami</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#packages" class="hover:text-brandBlue transition">Instalasi Speaker</a></li>
                        <li><a href="#packages" class="hover:text-brandBlue transition">Perbaikan & Pasang Listrik</a></li>
                        <li><a href="#packages" class="hover:text-brandBlue transition">Pemasangan Kamera CCTV</a></li>
                        <li><a href="#packages" class="hover:text-brandBlue transition">Instalasi Air & Plumbing</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-white font-bold text-lg mb-4">Akses Cepat</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#about" class="hover:text-brandBlue transition">Tentang Kami</a></li>
                        <li><a href="#packages" class="hover:text-brandBlue transition">Daftar Paket</a></li>
                        <li><a href="#gallery" class="hover:text-brandBlue transition">Portofolio Kerja</a></li>
                        <li><a href="#booking" class="hover:text-brandBlue transition">Pesan Jasa</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-white font-bold text-lg mb-4">Kantor Pusat</h5>
                    <p class="text-sm leading-relaxed mb-4">
                        Jl. Raya Utama Dewa No. 88, Denpasar, Bali - Indonesia.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-brandBlue transition"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-brandBlue transition"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-brandBlue transition"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="container mx-auto px-4 text-center mt-12 pt-8 border-t border-slate-800 text-xs">
                <p>&copy; 2026 DEWA PROJECTS. Seluruh Hak Cipta Dilindungi Undang-Undang.</p>
            </div>
        </footer>
    </main>


    <!-- ADMIN AREA (DASHBOARD & MANAGEMENT VIEW) -->
    <main id="admin-area" class="hidden min-h-screen bg-slate-100">
        <!-- Admin Navigation -->
        <header class="bg-slate-900 text-white shadow-md">
            <div class="container mx-auto px-4 py-4 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center space-x-3">
                    <img src="ChatGPT Image 28 Mei 2026, 00.04.15.png" alt="Logo" class="h-10 w-auto bg-white p-1 rounded">
                    <div>
                        <span class="block font-black text-white text-lg">DEWA PROJECTS</span>
                        <span class="text-[10px] tracking-wider text-blue-400 font-bold uppercase">Control Panel Dashboard</span>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button onclick="showSection('client-area')" class="px-4 py-2 border border-slate-700 rounded-lg hover:bg-slate-800 text-sm transition">
                        <i class="fa-solid fa-eye mr-2"></i>Lihat Website Utama
                    </button>
                    <button onclick="logoutAdmin()" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg text-sm transition">
                        <i class="fa-solid fa-right-from-bracket mr-1"></i> Log Out
                    </button>
                </div>
            </div>
        </header>

        <!-- Admin Layout Grid -->
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar Menu -->
                <div class="bg-white rounded-2xl shadow-sm p-6 space-y-2 h-fit border border-gray-200">
                    <div class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Navigasi Admin</div>
                    <button onclick="switchAdminTab('tab-dashboard')" id="btn-tab-dashboard" class="w-full flex items-center space-x-3 px-4 py-3 rounded-xl bg-brandBlue text-white font-semibold text-sm text-left transition shadow-md shadow-blue-200">
                        <i class="fa-solid fa-chart-line w-5"></i>
                        <span>Ringkasan Dashboard</span>
                    </button>
                    <button onclick="switchAdminTab('tab-bookings')" id="btn-tab-bookings" class="w-full flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-gray-100 text-gray-700 font-semibold text-sm text-left transition">
                        <i class="fa-solid fa-file-invoice w-5"></i>
                        <span>Pesanan Masuk</span>
                    </button>
                    <button onclick="switchAdminTab('tab-packages')" id="btn-tab-packages" class="w-full flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-gray-100 text-gray-700 font-semibold text-sm text-left transition">
                        <i class="fa-solid fa-tags w-5"></i>
                        <span>Kelola Paket Layanan</span>
                    </button>
                    <button onclick="switchAdminTab('tab-gallery')" id="btn-tab-gallery" class="w-full flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-gray-100 text-gray-700 font-semibold text-sm text-left transition">
                        <i class="fa-solid fa-images w-5"></i>
                        <span>Kelola Portofolio</span>
                    </button>
                    <button onclick="switchAdminTab('tab-sql')" id="btn-tab-sql" class="w-full flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-gray-100 text-gray-700 font-semibold text-sm text-left transition">
                        <i class="fa-solid fa-database w-5"></i>
                        <span>Skema SQL Database</span>
                    </button>
                </div>

                <!-- Main Content Area -->
                <div class="lg:col-span-3">
                    
                    <!-- TAB 1: DASHBOARD OVERVIEW -->
                    <div id="tab-dashboard" class="admin-tab space-y-8">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 flex items-center justify-between">
                                <div>
                                    <span class="text-sm font-semibold text-gray-400 block uppercase">Total Pemesanan</span>
                                    <span class="text-3xl font-extrabold text-slate-800" id="dash-booking-count">0</span>
                                </div>
                                <div class="w-12 h-12 bg-blue-100 text-brandBlue flex items-center justify-center rounded-2xl"><i class="fa-solid fa-file-signature text-xl"></i></div>
                            </div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 flex items-center justify-between">
                                <div>
                                    <span class="text-sm font-semibold text-gray-400 block uppercase">Jumlah Paket</span>
                                    <span class="text-3xl font-extrabold text-slate-800" id="dash-packages-count">0</span>
                                </div>
                                <div class="w-12 h-12 bg-green-100 text-green-600 flex items-center justify-center rounded-2xl"><i class="fa-solid fa-box-archive text-xl"></i></div>
                            </div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 flex items-center justify-between">
                                <div>
                                    <span class="text-sm font-semibold text-gray-400 block uppercase">Jumlah Galeri</span>
                                    <span class="text-3xl font-extrabold text-slate-800" id="dash-gallery-count">0</span>
                                </div>
                                <div class="w-12 h-12 bg-purple-100 text-purple-600 flex items-center justify-center rounded-2xl"><i class="fa-solid fa-images text-xl"></i></div>
                            </div>
                        </div>

                        <!-- Quick Actions & Info -->
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-slate-900 mb-4">Selamat Datang di Admin Panel DEWA PROJECTS</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Panel kontrol ini dirancang untuk mempermudah pembaruan data secara real-time. Anda dapat melacak pengerjaan pesanan langsung dari klien, menambah paket promo, mengunggah dokumentasi proyek yang baru selesai, serta menyalin struktur database SQL untuk dipasangkan pada server backend produksi Anda.
                            </p>
                        </div>
                    </div>

                    <!-- TAB 2: MANAGE BOOKINGS -->
                    <div id="tab-bookings" class="admin-tab hidden space-y-6">
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Daftar Antrean Pemesanan Jasa</h3>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-gray-50 border-b border-gray-100">
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Klien</th>
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Paket Jasa</th>
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Rencana Tanggal</th>
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Alamat Proyek</th>
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Status</th>
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="admin-bookings-list" class="divide-y divide-gray-100">
                                        <!-- Dynamic bookings list will go here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 3: MANAGE PACKAGES -->
                    <div id="tab-packages" class="admin-tab hidden space-y-8">
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-xl font-bold text-slate-900 mb-6">Tambah Paket Baru</h3>
                            <form id="addPackageForm" onsubmit="handleAddPackage(event)" class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div class="sm:col-span-1">
                                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nama Paket</label>
                                    <input type="text" id="pkg_name" required placeholder="Contoh: Paket CCTV 8 Cam" class="w-full px-4 py-2 border border-gray-300 rounded-lg outline-none text-sm focus:ring-2 focus:ring-brandBlue focus:border-brandBlue">
                                </div>
                                <div class="sm:col-span-1">
                                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Harga Paket (Rp)</label>
                                    <input type="number" id="pkg_price" required placeholder="Contoh: 1500000" class="w-full px-4 py-2 border border-gray-300 rounded-lg outline-none text-sm focus:ring-2 focus:ring-brandBlue focus:border-brandBlue">
                                </div>
                                <div class="sm:col-span-1">
                                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Kategori Layanan</label>
                                    <select id="pkg_category" class="w-full px-4 py-2 border border-gray-300 rounded-lg outline-none text-sm bg-white focus:ring-2 focus:ring-brandBlue focus:border-brandBlue">
                                        <option value="Kelistrikan">Kelistrikan</option>
                                        <option value="CCTV">CCTV</option>
                                        <option value="Plumbing">Plumbing</option>
                                        <option value="Audio & Speaker">Audio & Speaker</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-3">
                                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Spesifikasi Detail Paket (Pemisah tanda koma)</label>
                                    <input type="text" id="pkg_features" required placeholder="Contoh: Kabel 50m, Garansi 1 Thn, Setting Koneksi Hp" class="w-full px-4 py-2 border border-gray-300 rounded-lg outline-none text-sm focus:ring-2 focus:ring-brandBlue focus:border-brandBlue">
                                </div>
                                <div class="sm:col-span-3">
                                    <button type="submit" class="w-full bg-brandBlue hover:bg-blue-600 text-white font-bold py-2.5 rounded-lg text-sm transition">
                                        <i class="fa-solid fa-plus mr-1"></i> Daftarkan Paket Baru
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Current Packages List -->
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Manajemen Paket Tersedia</h3>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-gray-50 border-b border-gray-100">
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Nama Paket</th>
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Harga</th>
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Kategori</th>
                                            <th class="p-4 text-xs font-bold text-gray-400 uppercase">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="admin-packages-list" class="divide-y divide-gray-100">
                                        <!-- Dynamic packages listing -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 4: MANAGE GALLERY -->
                    <div id="tab-gallery" class="admin-tab hidden space-y-8">
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-xl font-bold text-slate-900 mb-6">Unggah Dokumentasi Proyek Baru</h3>
                            <form id="addGalleryForm" onsubmit="handleAddGallery(event)" class="space-y-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nama Proyek</label>
                                        <input type="text" id="gal_title" required placeholder="Contoh: Instalasi Audio Kafe Dewa" class="w-full px-4 py-2 border border-gray-300 rounded-lg outline-none text-sm focus:ring-2 focus:ring-brandBlue focus:border-brandBlue">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Kategori Proyek</label>
                                        <select id="gal_category" class="w-full px-4 py-2 border border-gray-300 rounded-lg outline-none text-sm bg-white focus:ring-2 focus:ring-brandBlue focus:border-brandBlue">
                                            <option value="Kelistrikan">Kelistrikan</option>
                                            <option value="CCTV">CCTV</option>
                                            <option value="Plumbing">Plumbing</option>
                                            <option value="Audio & Speaker">Audio & Speaker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Pilih File Foto Proyek</label>
                                        <input type="file" id="gal_file" accept="image/*" required class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-brandBlue hover:file:bg-blue-100">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Deskripsi Singkat</label>
                                        <input type="text" id="gal_desc" required placeholder="Contoh: Pengerjaan sistem tata suara di area outdoor" class="w-full px-4 py-2 border border-gray-300 rounded-lg outline-none text-sm focus:ring-2 focus:ring-brandBlue focus:border-brandBlue">
                                    </div>
                                </div>
                                <button type="submit" class="w-full bg-brandBlue hover:bg-blue-600 text-white font-bold py-2.5 rounded-lg text-sm transition">
                                    <i class="fa-solid fa-cloud-arrow-up mr-1"></i> Unggah Ke Portofolio
                                </button>
                            </form>
                        </div>

                        <!-- Current Portofolio Grid -->
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Semua Dokumentasi Terdaftar</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6" id="admin-gallery-list">
                                <!-- Dynamic admin gallery -->
                            </div>
                        </div>
                    </div>

                    <!-- TAB 5: SQL DATABASE VIEW -->
                    <div id="tab-sql" class="admin-tab hidden space-y-6">
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 text-left">
                            <div class="flex items-center justify-between border-b pb-4 mb-4">
                                <h3 class="text-xl font-bold text-slate-900">Skema SQL Database</h3>
                                <button onclick="copySqlToClipboard()" class="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-white rounded-lg text-xs transition">
                                    <i class="fa-solid fa-copy mr-1"></i> Salin Struktur SQL
                                </button>
                            </div>
                            <p class="text-xs text-gray-500 mb-4">
                                Skema SQL terstruktur ini dapat digunakan jika Anda ingin meningkatkan website ini ke backend server nyata yang menggunakan MySQL/PostgreSQL untuk menampung data dinamis.
                            </p>
                            <pre class="bg-slate-900 text-green-400 p-4 rounded-xl text-xs overflow-x-auto font-mono"><code id="sql-code-block">-- DATABASE SCHEMA DEWA PROJECTS

CREATE DATABASE IF NOT EXISTS dewa_projects_db;
USE dewa_projects_db;

-- 1. Kategori Proyek
CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE
);

-- 2. Paket Layanan Pemasangan & Maintenance
CREATE TABLE IF NOT EXISTS packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    package_name VARCHAR(150) NOT NULL,
    price DECIMAL(12, 2) NOT NULL,
    category_name VARCHAR(100) NOT NULL,
    features TEXT, -- data string yang dipisah tanda koma (CSV format)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Galeri Portofolio Hasil Kerja
CREATE TABLE IF NOT EXISTS project_gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    image_base64 LONGTEXT, -- Untuk menyimpan basis data foto secara string
    category_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 4. Daftar Booking Jasa dari Klien
CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(150) NOT NULL,
    client_phone VARCHAR(20) NOT NULL,
    package_name VARCHAR(150) NOT NULL,
    booking_date DATE NOT NULL,
    location_type VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    notes TEXT,
    status VARCHAR(50) DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- DATA AWAL / SEEDER (Opsional)
INSERT INTO categories (name) VALUES 
('Kelistrikan'), ('CCTV'), ('Plumbing'), ('Audio & Speaker');</code></pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- ADMIN LOGIN MODAL -->
    <div id="login-modal" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-2xl border border-gray-100 text-left space-y-6">
            <div class="text-center space-y-2">
                <img src="ChatGPT Image 28 Mei 2026, 00.04.15.png" alt="Logo" class="h-14 mx-auto object-contain">
                <h3 class="text-2xl font-black text-slate-800">Login Administrator</h3>
                <p class="text-sm text-gray-500">Gunakan pin default administrasi untuk mengakses dashboard.</p>
            </div>
            
            <form id="adminLoginForm" onsubmit="handleAdminLogin(event)" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">PIN / Sandi Akses</label>
                    <input type="password" id="admin_pin" required placeholder="Masukkan PIN default (Saran: 1234)" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brandBlue focus:border-brandBlue outline-none text-center text-lg tracking-widest transition">
                </div>
                
                <div class="flex space-x-3">
                    <button type="button" onclick="closeAdminLogin()" class="w-1/2 border border-gray-300 hover:bg-gray-50 text-gray-700 font-bold py-3 px-4 rounded-xl text-sm transition">
                        Batal
                    </button>
                    <button type="submit" class="w-1/2 bg-brandBlue hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-xl text-sm transition">
                        Masuk Dashboard
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- BUSINESS LOGIC & STATE MANAGEMENT SCRIPT -->
    <script>
        // MOCK DATA SEEDERS IN LOCALSTORAGE (PERSISTENCY FOR REFRESHES)
        const defaultPackages = [
            { id: 1, name: 'Paket CCTV 4 Cam Standar', price: 3500000, category: 'CCTV', features: '4 Kamera Full HD, DVR 1TB, Instalasi Kabel 50m, Garansi 1 Tahun' },
            { id: 2, name: 'Sistem Speaker Kafe / Sound', price: 5800000, category: 'Audio & Speaker', features: '4 Speaker Wall, Amplifier Pro, Mixer Audio Mini, Jasa Instalasi Kabel' },
            { id: 3, name: 'Instalasi Jalur Listrik Rumah', price: 1200000, category: 'Kelistrikan', features: 'Instalasi 10 Titik Lampu/Stopkontak, Pemasangan Box MCB Baru, Sertifikasi Laik Fungsi' },
            { id: 4, name: 'Instalasi Pompa & Jalur Air', price: 2100000, category: 'Plumbing', features: 'Pemasangan Pompa Pendorong, Pipa PVC Rucika 40m, Aksesoris Sanitasi Premium' }
        ];

        const defaultGallery = [
            { id: 1, title: 'Panel Listrik Utama Industri', category: 'Kelistrikan', desc: 'Instalasi kerapihan panel MCB dan pembagian daya gedung', image: 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=500&q=80' },
            { id: 2, title: 'Sistem Kamera Pengawas Kantor', category: 'CCTV', desc: 'Pemasangan CCTV Dome outdoor anti karat & koneksi mobile monitor', image: 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=500&q=80' },
            { id: 3, title: 'Instalasi Sound System Cafe Baru', category: 'Audio & Speaker', desc: 'Gantung speaker ambient dan penataan kabinet mixer audio', image: 'https://images.unsplash.com/photo-1545454675-3531b543be5d?auto=format&fit=crop&w=500&q=80' },
            { id: 4, title: 'Pemasangan Pipa Distribusi Utama', category: 'Plumbing', desc: 'Desain perpipaan air bersih dan air kotor dengan tekanan optimal', image: 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=500&q=80' }
        ];

        // Init localStorage data if not exists
        if (!localStorage.getItem('dewapro_packages')) {
            localStorage.setItem('dewapro_packages', JSON.stringify(defaultPackages));
        }
        if (!localStorage.getItem('dewapro_gallery')) {
            localStorage.setItem('dewapro_gallery', JSON.stringify(defaultGallery));
        }
        if (!localStorage.getItem('dewapro_bookings')) {
            localStorage.setItem('dewapro_bookings', JSON.stringify([]));
        }

        // Active State Vars
        let currentSection = 'client-area';
        let currentAdminTab = 'tab-dashboard';
        let isMobileMenuOpen = false;

        // On Page Load Initialization
        window.addEventListener('DOMContentLoaded', () => {
            renderClientPackages();
            renderClientGallery('Semua');
            populateBookingOptions();
            updateDashboardStats();
            renderAdminBookings();
            renderAdminPackages();
            renderAdminGallery();
        });

        // 1. NAVIGATION CONTROL
        function showSection(sectionId) {
            currentSection = sectionId;
            if (sectionId === 'client-area') {
                document.getElementById('client-area').classList.remove('hidden');
                document.getElementById('admin-area').classList.add('hidden');
                // Refresh client page data components
                renderClientPackages();
                renderClientGallery('Semua');
                populateBookingOptions();
            } else {
                document.getElementById('client-area').classList.add('hidden');
                document.getElementById('admin-area').classList.remove('hidden');
                // Refresh admin page data panels
                updateDashboardStats();
                renderAdminBookings();
                renderAdminPackages();
                renderAdminGallery();
            }
        }

        function toggleMobileMenu() {
            isMobileMenuOpen = !isMobileMenuOpen;
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('menu-icon');
            if (isMobileMenuOpen) {
                menu.classList.remove('hidden');
                icon.className = "fa-solid fa-xmark text-2xl";
            } else {
                menu.classList.add('hidden');
                icon.className = "fa-solid fa-bars text-2xl";
            }
        }

        function closeMobileMenu() {
            isMobileMenuOpen = false;
            document.getElementById('mobile-menu').classList.add('hidden');
            document.getElementById('menu-icon').className = "fa-solid fa-bars text-2xl";
        }

        // 2. ADMIN AUTH SYSTEM (SIMULATED PIN: 1234)
        function showAdminLogin() {
            document.getElementById('login-modal').classList.remove('hidden');
        }

        function closeAdminLogin() {
            document.getElementById('login-modal').classList.add('hidden');
            document.getElementById('admin_pin').value = '';
        }

        function handleAdminLogin(event) {
            event.preventDefault();
            const pinInput = document.getElementById('admin_pin').value;
            // Pin admin default adalah 1234
            if (pinInput === '1234') {
                closeAdminLogin();
                showSection('admin-area');
                alert('Akses Admin Diberikan. Selamat datang di Panel Kontrol DEWA PROJECTS!');
            } else {
                alert('PIN Salah! Harap masukkan PIN yang benar untuk melakukan otorisasi (PIN default: 1234).');
            }
        }

        function logoutAdmin() {
            if (confirm('Apakah Anda yakin ingin keluar dari Panel Kontrol Admin?')) {
                showSection('client-area');
            }
        }

        function switchAdminTab(tabId) {
            currentAdminTab = tabId;
            // Hide all tabs
            document.querySelectorAll('.admin-tab').forEach(tab => {
                tab.classList.add('hidden');
            });
            // Show target tab
            document.getElementById(tabId).classList.remove('hidden');

            // Toggle active sidebar states
            const menuButtons = [
                { id: 'btn-tab-dashboard', tab: 'tab-dashboard' },
                { id: 'btn-tab-bookings', tab: 'tab-bookings' },
                { id: 'btn-tab-packages', tab: 'tab-packages' },
                { id: 'btn-tab-gallery', tab: 'tab-gallery' },
                { id: 'btn-tab-sql', tab: 'tab-sql' }
            ];

            menuButtons.forEach(btn => {
                const element = document.getElementById(btn.id);
                if (btn.tab === tabId) {
                    element.className = "w-full flex items-center space-x-3 px-4 py-3 rounded-xl bg-brandBlue text-white font-semibold text-sm text-left transition shadow-md shadow-blue-200";
                } else {
                    element.className = "w-full flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-gray-100 text-gray-700 font-semibold text-sm text-left transition";
                }
            });
        }

        // 3. RENDER DATA (CLIENT VIEW)
        function renderClientPackages() {
            const packages = JSON.parse(localStorage.getItem('dewapro_packages')) || [];
            const container = document.getElementById('packages-container');
            container.innerHTML = '';

            if (packages.length === 0) {
                container.innerHTML = `<div class="col-span-full py-8 text-gray-500 font-semibold">Belum ada paket layanan yang didaftarkan oleh admin.</div>`;
                return;
            }

            packages.forEach(pkg => {
                const featureListHtml = pkg.features.split(',').map(f => `
                    <li class="flex items-start space-x-2 text-sm text-gray-600">
                        <i class="fa-solid fa-check text-green-500 mt-0.5"></i>
                        <span>${f.trim()}</span>
                    </li>
                `).join('');

                const formattedPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(pkg.price);

                const cardHtml = `
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transform transition duration-300 border border-gray-100 flex flex-col justify-between overflow-hidden text-left h-full">
                        <div class="p-6 space-y-4">
                            <span class="inline-block px-3 py-1 bg-blue-50 text-brandBlue font-bold rounded-lg text-xs uppercase">${pkg.category}</span>
                            <h3 class="text-xl font-bold text-gray-900 leading-tight">${pkg.name}</h3>
                            <hr class="border-gray-100">
                            <ul class="space-y-2">
                                ${featureListHtml}
                            </ul>
                        </div>
                        <div class="p-6 bg-gray-50 border-t border-gray-100 space-y-4">
                            <div>
                                <span class="text-xs text-gray-400 block uppercase font-bold">Mulai Dari</span>
                                <span class="text-2xl font-black text-brandBlue">${formattedPrice}</span>
                            </div>
                            <button onclick="orderPackageDirect('${pkg.name}')" class="w-full text-center py-2.5 bg-brandBlue hover:bg-blue-600 text-white font-bold rounded-xl transition text-sm">
                                <i class="fa-solid fa-cart-shopping mr-1"></i> Pesan Paket
                            </button>
                        </div>
                    </div>
                `;
                container.innerHTML += cardHtml;
            });
        }

        function renderClientGallery(categoryFilter) {
            const gallery = JSON.parse(localStorage.getItem('dewapro_gallery')) || [];
            const container = document.getElementById('gallery-container');
            container.innerHTML = '';

            const filtered = categoryFilter === 'Semua' ? gallery : gallery.filter(item => item.category === categoryFilter);

            if (filtered.length === 0) {
                container.innerHTML = `<div class="col-span-full py-8 text-gray-400 font-semibold text-center">Belum ada portofolio proyek di kategori ini.</div>`;
                return;
            }

            filtered.forEach(item => {
                const itemHtml = `
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition group">
                        <div class="relative h-48 w-full overflow-hidden bg-gray-200">
                            <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                            <span class="absolute top-3 left-3 px-3 py-1 bg-brandBlue/90 backdrop-blur-sm text-white text-xs font-bold rounded-full shadow-sm">${item.category}</span>
                        </div>
                        <div class="p-5 text-left space-y-2">
                            <h4 class="font-bold text-gray-900 line-clamp-1">${item.title}</h4>
                            <p class="text-xs text-gray-500 leading-relaxed line-clamp-2">${item.desc}</p>
                        </div>
                    </div>
                `;
                container.innerHTML += itemHtml;
            });
        }

        function filterGallery(category) {
            // Update UI Active Tab design
            const filterContainer = document.getElementById('gallery-filters');
            const buttons = filterContainer.getElementsByTagName('button');
            for (let btn of buttons) {
                if (btn.innerText.trim() === category || (category === 'Semua' && btn.innerText.trim() === 'Semua') || (category === 'Kelistrikan' && btn.innerText.trim() === 'Listrik') || (category === 'Audio & Speaker' && btn.innerText.trim() === 'Audio')) {
                    btn.className = "px-4 py-2 rounded-full text-sm font-semibold bg-brandBlue text-white shadow-sm transition";
                } else {
                    btn.className = "px-4 py-2 rounded-full text-sm font-semibold bg-white text-gray-600 hover:bg-gray-100 transition";
                }
            }
            renderClientGallery(category);
        }

        function populateBookingOptions() {
            const packages = JSON.parse(localStorage.getItem('dewapro_packages')) || [];
            const selectEl = document.getElementById('book_package');
            selectEl.innerHTML = '<option value="" disabled selected>-- Pilih Layanan / Paket Proyek --</option>';
            
            // Custom option
            selectEl.innerHTML += `<option value="Custom Project / Konsultasi Lainnya">Custom Project / Konsultasi Lainnya</option>`;
            
            packages.forEach(pkg => {
                selectEl.innerHTML += `<option value="${pkg.name}">${pkg.name}</option>`;
            });
        }

        function orderPackageDirect(packageName) {
            showSection('client-area');
            const selectEl = document.getElementById('book_package');
            // Populate if not done
            populateBookingOptions();
            selectEl.value = packageName;
            // Scroll dynamically to booking element
            document.getElementById('booking').scrollIntoView({ behavior: 'smooth' });
        }


        // 4. BOOKING FORM HANDLER
        function handleBookingSubmit(event) {
            event.preventDefault();
            
            const name = document.getElementById('book_name').value;
            const phone = document.getElementById('book_phone').value;
            const packageSelected = document.getElementById('book_package').value;
            const date = document.getElementById('book_date').value;
            const locationType = document.getElementById('book_location_type').value;
            const address = document.getElementById('book_address').value;
            const notes = document.getElementById('book_notes').value;

            if (!packageSelected) {
                alert('Silakan pilih salah satu layanan atau model paket yang tersedia.');
                return;
            }

            const newBooking = {
                id: Date.now(),
                clientName: name,
                clientPhone: phone,
                packageSelected: packageSelected,
                bookingDate: date,
                locationType: locationType,
                address: address,
                notes: notes || '-',
                status: 'Pending',
                createdAt: new Date().toLocaleDateString('id-ID')
            };

            // Save to localStorage
            const bookings = JSON.parse(localStorage.getItem('dewapro_bookings')) || [];
            bookings.push(newBooking);
            localStorage.setItem('dewapro_bookings', JSON.stringify(bookings));

            // Generate WhatsApp Text Redirect for direct instant booking alert to Admin!
            const waMessage = `Halo DEWA PROJECTS!%0ASaya ingin memesan jasa/layanan berikut:%0A%0A*Nama:* ${name}%0A*WhatsApp:* ${phone}%0A*Pilihan Paket:* ${packageSelected}%0A*Tanggal Rencana:* ${date}%0A*Lokasi:* ${locationType}%0A*Alamat:* ${address}%0A*Catatan:* ${notes}%0A%0AMohon jadwal survei lokasi dan kalkulasi penawaran. Terima kasih!`;
            
            // Simulasikan Notifikasi Sukses
            alert(`Terima kasih ${name}, pesanan Anda berhasil didaftarkan di sistem DEWA PROJECTS!\n\nSelanjutnya sistem akan mengarahkan Anda langsung ke WhatsApp Admin kami untuk konfirmasi pemesanan kilat.`);
            
            // Redirect to WhatsApp API
            window.open(`https://api.whatsapp.com/send?phone=6281234567890&text=${waMessage}`, '_blank');
            
            // Reset form
            document.getElementById('bookingForm').reset();
        }


        // 5. ADMIN CONTROL PANEL FUNCTIONS
        function updateDashboardStats() {
            const bookings = JSON.parse(localStorage.getItem('dewapro_bookings')) || [];
            const packages = JSON.parse(localStorage.getItem('dewapro_packages')) || [];
            const gallery = JSON.parse(localStorage.getItem('dewapro_gallery')) || [];

            document.getElementById('dash-booking-count').innerText = bookings.length;
            document.getElementById('dash-packages-count').innerText = packages.length;
            document.getElementById('dash-gallery-count').innerText = gallery.length;
        }

        function renderAdminBookings() {
            const bookings = JSON.parse(localStorage.getItem('dewapro_bookings')) || [];
            const listContainer = document.getElementById('admin-bookings-list');
            listContainer.innerHTML = '';

            if (bookings.length === 0) {
                listContainer.innerHTML = `
                    <tr>
                        <td colspan="6" class="p-8 text-center text-sm text-gray-400 font-semibold">
                            Belum ada pesanan masuk dari klien.
                        </td>
                    </tr>
                `;
                return;
            }

            // Render newest first
            [...bookings].reverse().forEach(book => {
                let statusColorClass = 'bg-yellow-100 text-yellow-700';
                if (book.status === 'In Progress') statusColorClass = 'bg-blue-100 text-brandBlue';
                if (book.status === 'Selesai') statusColorClass = 'bg-green-100 text-green-700';

                listContainer.innerHTML += `
                    <tr class="hover:bg-slate-50 transition text-sm">
                        <td class="p-4">
                            <span class="block font-bold text-gray-800">${book.clientName}</span>
                            <span class="text-xs text-gray-400">${book.clientPhone}</span>
                        </td>
                        <td class="p-4 font-semibold text-gray-700">${book.packageSelected}</td>
                        <td class="p-4 text-gray-500">${book.bookingDate}</td>
                        <td class="p-4 max-w-[180px] truncate text-gray-500" title="${book.address}">${book.address}</td>
                        <td class="p-4">
                            <span class="px-2 py-1 rounded-full text-xs font-bold ${statusColorClass}">
                                ${book.status}
                            </span>
                        </td>
                        <td class="p-4 flex space-x-2">
                            <button onclick="updateBookingStatus(${book.id}, 'In Progress')" class="p-1.5 bg-blue-50 hover:bg-blue-100 text-brandBlue rounded-lg text-xs" title="Set In Progress">
                                <i class="fa-solid fa-spinner"></i>
                            </button>
                            <button onclick="updateBookingStatus(${book.id}, 'Selesai')" class="p-1.5 bg-green-50 hover:bg-green-100 text-green-600 rounded-lg text-xs" title="Set Selesai">
                                <i class="fa-solid fa-circle-check"></i>
                            </button>
                            <button onclick="deleteBooking(${book.id})" class="p-1.5 bg-red-50 hover:bg-red-100 text-red-600 rounded-lg text-xs" title="Hapus">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;
            });
        }

        function updateBookingStatus(id, newStatus) {
            const bookings = JSON.parse(localStorage.getItem('dewapro_bookings')) || [];
            const index = bookings.findIndex(b => b.id === id);
            if (index !== -1) {
                bookings[index].status = newStatus;
                localStorage.setItem('dewapro_bookings', JSON.stringify(bookings));
                renderAdminBookings();
            }
        }

        function deleteBooking(id) {
            if (confirm('Apakah Anda yakin ingin menghapus catatan pesanan ini?')) {
                let bookings = JSON.parse(localStorage.getItem('dewapro_bookings')) || [];
                bookings = bookings.filter(b => b.id !== id);
                localStorage.setItem('dewapro_bookings', JSON.stringify(bookings));
                renderAdminBookings();
                updateDashboardStats();
            }
        }

        // 6. ADMIN MANAGE PACKAGES
        function renderAdminPackages() {
            const packages = JSON.parse(localStorage.getItem('dewapro_packages')) || [];
            const listContainer = document.getElementById('admin-packages-list');
            listContainer.innerHTML = '';

            packages.forEach(pkg => {
                const formattedPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(pkg.price);

                listContainer.innerHTML += `
                    <tr class="hover:bg-slate-50 transition text-sm">
                        <td class="p-4 font-bold text-gray-800">${pkg.name}</td>
                        <td class="p-4 font-semibold text-brandBlue">${formattedPrice}</td>
                        <td class="p-4"><span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-bold uppercase">${pkg.category}</span></td>
                        <td class="p-4">
                            <button onclick="deletePackage(${pkg.id})" class="p-1.5 bg-red-50 hover:bg-red-100 text-red-600 rounded-lg text-xs" title="Hapus">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;
            });
        }

        function handleAddPackage(event) {
            event.preventDefault();
            const name = document.getElementById('pkg_name').value;
            const price = parseFloat(document.getElementById('pkg_price').value);
            const category = document.getElementById('pkg_category').value;
            const features = document.getElementById('pkg_features').value;

            const packages = JSON.parse(localStorage.getItem('dewapro_packages')) || [];
            const newPackage = {
                id: Date.now(),
                name,
                price,
                category,
                features
            };

            packages.push(newPackage);
            localStorage.setItem('dewapro_packages', JSON.stringify(packages));

            document.getElementById('addPackageForm').reset();
            renderAdminPackages();
            updateDashboardStats();
            alert('Paket layanan baru berhasil ditambahkan secara live!');
        }

        function deletePackage(id) {
            if (confirm('Apakah Anda yakin ingin menghapus paket layanan ini dari daftar penawaran?')) {
                let packages = JSON.parse(localStorage.getItem('dewapro_packages')) || [];
                packages = packages.filter(p => p.id !== id);
                localStorage.setItem('dewapro_packages', JSON.stringify(packages));
                renderAdminPackages();
                updateDashboardStats();
            }
        }

        // 7. ADMIN MANAGE GALLERY
        function renderAdminGallery() {
            const gallery = JSON.parse(localStorage.getItem('dewapro_gallery')) || [];
            const container = document.getElementById('admin-gallery-list');
            container.innerHTML = '';

            gallery.forEach(item => {
                container.innerHTML += `
                    <div class="border rounded-2xl p-3 bg-slate-50 relative space-y-2 text-left">
                        <img src="${item.image}" class="w-full h-24 object-cover rounded-xl bg-gray-200">
                        <h4 class="font-bold text-gray-800 text-sm truncate">${item.title}</h4>
                        <span class="inline-block text-[10px] uppercase bg-brandBlue text-white font-bold px-2 py-0.5 rounded">${item.category}</span>
                        <p class="text-[11px] text-gray-500 line-clamp-2">${item.desc}</p>
                        <button onclick="deleteGalleryItem(${item.id})" class="absolute top-1 right-1 w-7 h-7 bg-red-600 text-white rounded-full flex items-center justify-center text-xs shadow-md hover:bg-red-700 transition">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                `;
            });
        }

        function handleAddGallery(event) {
            event.preventDefault();
            const title = document.getElementById('gal_title').value;
            const category = document.getElementById('gal_category').value;
            const desc = document.getElementById('gal_desc').value;
            const fileInput = document.getElementById('gal_file');

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const base64Image = e.target.result;

                    const gallery = JSON.parse(localStorage.getItem('dewapro_gallery')) || [];
                    const newItem = {
                        id: Date.now(),
                        title,
                        category,
                        desc,
                        image: base64Image
                    };

                    gallery.push(newItem);
                    localStorage.setItem('dewapro_gallery', JSON.stringify(gallery));

                    document.getElementById('addGalleryForm').reset();
                    renderAdminGallery();
                    updateDashboardStats();
                    alert('Dokumentasi proyek baru berhasil diunggah ke portofolio!');
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }

        function deleteGalleryItem(id) {
            if (confirm('Apakah Anda yakin ingin menghapus dokumentasi proyek ini?')) {
                let gallery = JSON.parse(localStorage.getItem('dewapro_gallery')) || [];
                gallery = gallery.filter(item => item.id !== id);
                localStorage.setItem('dewapro_gallery', JSON.stringify(gallery));
                renderAdminGallery();
                updateDashboardStats();
            }
        }

        // Helper Copy SQL Database script
        function copySqlToClipboard() {
            const code = document.getElementById('sql-code-block').innerText;
            navigator.clipboard.writeText(code).then(() => {
                alert('Skema SQL Database berhasil disalin ke papan klip!');
            }).catch(err => {
                alert('Gagal menyalin teks. Silakan salin secara manual.');
            });
        }
    </script>
</body>
</html>
