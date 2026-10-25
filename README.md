<div align="center">
  <h1>Sistem Laporan Banjir</h1>
  <p>Aplikasi web responsif berbasis Laravel untuk pelaporan titik banjir secara cepat, akurat, dan terstruktur.</p>

  [![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
  [![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)

</div>

---

## 📖 Deskripsi
**Sistem Laporan Banjir** adalah platform digital yang dirancang untuk memudahkan masyarakat dan instansi dalam mendata kejadian banjir di berbagai titik lokasi. Aplikasi ini dikembangkan menggunakan kerangka kerja Laravel dengan arsitektur MVC (Model-View-Controller) yang kokoh, menjadikannya fondasi yang tepat untuk implementasi teknologi di tingkat kota.

## ✨ Fitur Utama
* **Form Pelaporan Intuitif:** Antarmuka pelaporan (`form.blade.php`) yang dirancang ramah pengguna untuk memasukkan data laporan secara efisien.
* **Sistem Konfirmasi:** Halaman validasi (`konfirmasi.blade.php`) untuk memastikan data laporan yang dikirimkan pengguna telah terekam dengan sukses.
* **Backend Terstruktur:** Pemisahan logika bisnis dan penanganan *request* yang rapi melalui `LaporBanjirController.php`.

## 🛠️ Teknologi yang Digunakan
* **Backend:** PHP, Laravel 
* **Frontend:** Laravel Blade Templating Engine, CSS, JavaScript (`app.js`)
* **Database:** MySQL / SQLite
* **Testing:** PHPUnit

## 🚀 Panduan Instalasi
Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal kamu:

1. **Clone Repository**
   ```bash
   git clone [https://github.com/username-github-kamu/laporan-banjir.git](https://github.com/username-github-kamu/laporan-banjir.git)
   cd laporan-banjir
