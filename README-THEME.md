# Barokah Printing - Landing Page WordPress

Landing page profesional untuk bisnis percetakan dengan menggunakan WordPress, PHP, dan Tailwind CSS.

## 📋 Deskripsi

Website ini adalah landing page khusus untuk bisnis percetakan yang menampilkan:
- Hero section yang menarik
- Layanan percetakan lengkap
- Portfolio hasil karya
- Testimonial pelanggan
- Form kontak terintegrasi
- Design responsif untuk semua device

## 🚀 Cara Menjalankan di Localhost

### Prasyarat
- XAMPP atau server lokal lainnya (Apache + MySQL + PHP)
- Web browser (Chrome, Firefox, Safari, dll)
- Text editor (VS Code, Sublime Text, dll)

### Langkah-langkah Instalasi

#### 1. Persiapan Server Lokal
```bash
# Pastikan XAMPP sudah terinstall
# Jalankan XAMPP Control Panel
# Start Apache dan MySQL
```

#### 2. Setup Database
1. Buka browser dan akses `http://localhost/phpmyadmin`
2. Buat database baru dengan nama `barokah-ibu`
3. Import file database jika ada, atau biarkan WordPress membuat tabel secara otomatis

#### 3. Konfigurasi WordPress
1. File `wp-config.php` sudah dikonfigurasi dengan:
   - Database name: `barokah-ibu`
   - Username: `root`
   - Password: (kosong)
   - Host: `localhost`

#### 4. Akses Website
1. Buka browser
2. Akses: `http://localhost/barokah-ibu`
3. Jika belum terinstall, ikuti wizard instalasi WordPress

#### 5. Aktivasi Theme
1. Login ke WordPress Admin: `http://localhost/barokah-ibu/wp-admin`
2. Buat akun admin jika belum ada
3. Pergi ke **Appearance > Themes**
4. Aktifkan theme **"Barokah Printing"**

## 🎨 Fitur Theme

### 1. Custom Post Types
- **Services**: Untuk menambah layanan percetakan
- **Portfolio**: Untuk menampilkan hasil karya

### 2. Sections yang Tersedia
- **Hero Section**: Banner utama dengan CTA
- **Features**: Keunggulan layanan
- **Services**: Daftar layanan percetakan
- **Portfolio**: Galeri hasil karya (dengan filter)
- **About**: Tentang perusahaan dengan statistik
- **Testimonials**: Ulasan pelanggan
- **Contact**: Form kontak dan informasi

### 3. Teknologi yang Digunakan
- **WordPress**: CMS framework
- **PHP**: Backend programming
- **Tailwind CSS**: Frontend styling
- **JavaScript**: Interactive features
- **Font Awesome**: Icons
- **Responsive Design**: Mobile-friendly

## ⚙️ Kustomisasi

### Mengganti Logo
1. Login ke WordPress Admin
2. Pergi ke **Appearance > Customize > Site Identity**
3. Upload logo baru

### Menambah Layanan
1. Login ke WordPress Admin
2. Pergi ke **Services > Add New**
3. Tambahkan judul, deskripsi, gambar, dan harga

### Menambah Portfolio
1. Login ke WordPress Admin
2. Pergi ke **Portfolio > Add New**
3. Upload gambar dan tambahkan deskripsi

### Mengubah Informasi Kontak
Edit file: `wp-content/themes/barokah-printing/template-parts/contact-section.php`

### Custom CSS
Tambahkan CSS kustom di:
- **WordPress Admin > Appearance > Customize > Additional CSS**
- Atau edit file `style.css` di theme

## 📱 Responsivitas

Website ini 100% responsif dan dioptimalkan untuk:
- Desktop (1920px+)
- Laptop (1024px - 1919px)
- Tablet (768px - 1023px)
- Mobile (320px - 767px)

## 🔧 Troubleshooting

### Website Tidak Muncul
1. Pastikan Apache berjalan di XAMPP
2. Cek path folder: `C:\xampp\htdocs\barokah-ibu`
3. Pastikan file `index.php` ada di root folder

### Database Error
1. Pastikan MySQL berjalan di XAMPP
2. Cek konfigurasi database di `wp-config.php`
3. Pastikan database `barokah-ibu` sudah dibuat

### Theme Tidak Muncul
1. Pastikan folder theme ada di: `wp-content/themes/barokah-printing/`
2. Pastikan file `style.css` dan `index.php` ada di folder theme
3. Refresh halaman **Appearance > Themes**

### CSS Tidak Load
1. Pastikan koneksi internet aktif (untuk Tailwind CDN)
2. Clear browser cache
3. Cek console browser untuk error

## 🌐 URL Penting

- **Website**: `http://localhost/barokah-ibu`
- **Admin**: `http://localhost/barokah-ibu/wp-admin`
- **PHPMyAdmin**: `http://localhost/phpmyadmin`

## 📞 Support

Jika mengalami kendala, periksa:
1. File error log di XAMPP
2. WordPress debug log
3. Browser console untuk JavaScript errors

## 🚀 Deployment ke Production

Untuk deploy ke hosting:
1. Export database dari phpMyAdmin
2. Upload semua file via FTP
3. Import database di hosting
4. Update wp-config.php dengan kredensial hosting
5. Update URL di database jika diperlukan

## 📝 Lisensi

Theme ini dibuat khusus untuk Barokah Printing dan dapat dikustomisasi sesuai kebutuhan.

---
**Dibuat dengan ❤️ untuk Barokah Printing**