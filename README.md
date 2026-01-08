# Portfolio CMS - CodeIgniter 4

Website portfolio pribadi yang dilengkapi dengan **Content Management System (CMS)** untuk mengelola konten seperti profil, proyek, blog, dan lainnya. Project ini dibangun menggunakan **CodeIgniter 4** dan ditujukan agar mudah dikembangkan serta terbuka untuk kontribusi.

![GitHub stars](https://img.shields.io/github/stars/wafley/cms-portfolio)
![GitHub license](https://img.shields.io/github/license/wafley/cms-portfolio)
![Build Status](https://img.shields.io/github/actions/workflow/status/wafley/cms-portfolio/main.yml)

## Fitur Utama

-   Manajemen konten portfolio (CRUD)
-   Dashboard admin
-   Autentikasi & otorisasi
-   Manajemen proyek / pengalaman
-   Manajemen artikel / blog
-   Responsive design
-   CMS berbasis CodeIgniter 4

## Teknologi yang Digunakan

-   **Backend**: CodeIgniter 4
-   **Frontend**: Untuk admin (Azira) dan untuk public (FolioOne)
-   **Database**: MySQL / MariaDB
-   **Auth**: Session CI4

## Persyaratan Sistem

Pastikan environment Anda memenuhi syarat berikut:

-   PHP >= 8.0
-   Composer
-   Web Server (Apache / Nginx)
-   MySQL / MariaDB
-   Git

## Panduan Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/username/portfolio-ci4.git
cd portfolio-ci4

```

### 2. Install Dependency

```bash
composer install

```

### 3. Salin File Environment

```bash
cp env .env

```

### 4. Setup Assets (Penting)

Karena aset gambar dan library frontend tidak disimpan di repositori Git, Anda perlu mengunduhnya secara manual:

1. **Unduh Assets**: Buka link Google Drive berikut: [`https://drive.google.com/file/d/1O7-cqbjOU7Kpp2KeVDh4-ypjGk6YMAYU/view?usp=sharing`](<https://www.google.com/search?q=%5Bhttps://drive.google.com/file/d/1O7-cqbjOU7Kpp2KeVDh4-ypjGk6YMAYU/view%3Fusp%3Dsharing%5D(https://drive.google.com/file/d/1O7-cqbjOU7Kpp2KeVDh4-ypjGk6YMAYU/view%3Fusp%3Dsharing)>)
2. **Ekstrak File**: Ekstrak file `.zip` yang telah diunduh.
3. Pindahkan/copy folder hasil ekstrak tersebut ke dalam direktori: `public/assets/`

### 5. Konfigurasi File `.env`

Buka file `.env` dan sesuaikan konfigurasi database Anda.

### 6. Generate Application Key

```bash
php spark key:generate

```

### 7. Migrasi Database

```bash
php spark migrate

```

### 8. Jalankan Seeder (Wajib)

Menjalankan seeder sangat penting untuk inisialisasi data awal (seperti akun admin dan pengaturan situs). Tanpa langkah ini, Anda tidak akan bisa login ke dashboard.

```bash
php spark db:seed DatabaseSeeder

```

> **Catatan:** Data awal (email, password, dll) yang dimasukkan melalui seeder dapat Anda ubah sesuai kebutuhan pada file `app/Database/Seeds/UserSeeder.php` sebelum menjalankan perintah di atas.

### 9. Jalankan Development Server

```bash
php spark serve

```

Akses melalui: `http://localhost:8080`

---

## Akun Admin Default

Setelah menjalankan seeder, gunakan kredensial berikut:

-   **Username**: `admin`
-   **Password**: `12345678`

> **Penting:** Segera ubah password dan data profil melalui dashboard admin setelah login pertama kali.

## Struktur Folder Penting

```text
app/
├── Config/
├── Controllers/
├── Database/
│   ├── Migrations/
│   └── Seeds/      <-- Tempat modifikasi data awal (seeder)
├── Models/
├── Views/
public/
├── assets/

```

### 🤝 Contributing

Kontribusi sangat terbuka! Silakan buat issue atau pull request.
Semua kontribusi, sekecil apa pun, sangat dihargai ❤️

## Lisensi

Project ini menggunakan lisensi **MIT License**.

---

⭐ Jangan lupa star repo ini agar project ini terus berkembang!
