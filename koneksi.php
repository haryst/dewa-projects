<?php
// 1. Konfigurasi Kredensial Database (Default XAMPP)
$host = "localhost";
$user = "root";             // Username default XAMPP adalah root
$pass = "";                 // Password default XAMPP adalah kosong/tanpa sandi
$db   = "dewa_projects_db"; // Nama database yang kita buat sebelumnya

// 2. Membuat Koneksi ke MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// 3. Memeriksa Status Koneksi
if (!$conn) {
    // Jika koneksi gagal, hentikan skrip dan tampilkan pesan kesalahannya
    die("Koneksi Database Gagal! Kode Error: " . mysqli_connect_connect_errno() . " - " . mysqli_connect_error());
}

// 4. Jika koneksi berhasil
echo "
<div style='font-family: sans-serif; text-align: center; margin-top: 50px;'>
    <div style='display: inline-block; padding: 20px 40px; background-color: #d1fae5; border: 2px solid #34d399; border-radius: 12px; color: #065f46;'>
        <h2 style='margin: 0 0 10px 0;'>🎉 Koneksi Berhasil!</h2>
        <p style='margin: 0;'>Skrip PHP berhasil terhubung ke database <strong>$db</strong> di MySQL.</p>
    </div>
</div>
";
?>
```
eof

### Langkah-Langkah Cara Mengujinya di Komputer Anda:

1. **Simpan File:**
   Simpan file kode di atas dengan nama **`koneksi.php`** di dalam folder proyek Anda di dalam direktori htdocs XAMPP.
   * *Contoh lokasi:* `C:\xampp\htdocs\dewa-projects\koneksi.php`

2. **Pastikan MySQL Aktif:**
   Buka **XAMPP Control Panel** dan pastikan tombol **Start** pada **Apache** dan **MySQL** sudah diklik (berwarna hijau).

3. **Jalankan Lewat Browser:**
   Buka browser Anda, lalu akses alamat url berikut:
   ```text
   http://localhost/dewa-projects/koneksi.php
