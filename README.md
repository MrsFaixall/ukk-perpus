<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel 8

Laravel adalah framework PHP yang dirancang untuk membuat pengembangan aplikasi web menjadi lebih mudah dan efisien. Laravel menyediakan berbagai fitur yang kuat dan fleksibel, seperti routing, middleware, ORM (Eloquent), queue, dan banyak lagi.

## Persyaratan Sistem

Sebelum memulai instalasi Laravel 8, pastikan server atau mesin lokal Anda memenuhi persyaratan berikut:

- PHP >= 7.3
- Composer
- MySQL atau database lainnya yang didukung

## Instalasi Laravel 8

### 1. Instalasi dan Setup Proyek Laravel Baru

Untuk memulai proyek Laravel baru di desktop Anda, gunakan perintah berikut:

```bash
# 1. Download dan instal Composer, jika belum terpasang
curl -sS https://getcomposer.org/installer | php && sudo mv composer.phar /usr/local/bin/composer

# 2. Membuat proyek Laravel baru dan masuk ke direktori proyek
composer create-project --prefer-dist laravel/laravel nama-proyek-anda && cd nama-proyek-anda

# 3. Konfigurasi file .env sesuai dengan pengaturan database Anda
sed -i 's/DB_DATABASE=laravel/DB_DATABASE=nama_database/' .env
sed -i 's/DB_USERNAME=root/DB_USERNAME=user_database/' .env
sed -i 's/DB_PASSWORD=/DB_PASSWORD=password_database/' .env

# 4. Jalankan migrasi untuk membuat tabel di database
php artisan migrate

# 5. Jalankan server pengembangan Laravel
php artisan serve


2. Copy Paste Program dari Repository Orang Lain
Jika Anda ingin meng-copy program dari repository orang lain di GitHub dan menjalankannya di desktop Anda, ikuti langkah-langkah berikut:

bash
Salin kode
# 1. Clone repository dari GitHub
git clone https://github.com/username/repository.git

# 2. Masuk ke direktori proyek
cd repository

# 3. Install semua dependensi yang diperlukan oleh Laravel
composer install

# 4. Buat file .env dari contoh yang disediakan
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Konfigurasi file .env sesuai dengan pengaturan database Anda
sed -i 's/DB_DATABASE=laravel/DB_DATABASE=nama_database/' .env
sed -i 's/DB_USERNAME=root/DB_USERNAME=user_database/' .env
sed -i 's/DB_PASSWORD=/DB_PASSWORD=password_database/' .env

# 7. Jalankan migrasi untuk membuat tabel di database
php artisan migrate

# 8. Jalankan server pengembangan Laravel
php artisan serve
