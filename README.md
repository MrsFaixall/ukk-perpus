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

Berikut adalah langkah-langkah untuk memulai proyek Laravel baru di desktop Anda:

| Tahap | Perintah                                                      | Penjelasan                                                   |
|-------|---------------------------------------------------------------|--------------------------------------------------------------|
| 1     | `curl -sS https://getcomposer.org/installer | php && sudo mv composer.phar /usr/local/bin/composer` | Mengunduh dan menginstal Composer, jika belum terpasang.     |
| 2     | `composer create-project --prefer-dist laravel/laravel nama-proyek-anda && cd nama-proyek-anda` | Membuat proyek Laravel baru dan masuk ke direktori proyek.    |
| 3     | `sed -i 's/DB_DATABASE=laravel/DB_DATABASE=nama_database/' .env` | Mengganti nama database di file `.env`.                       |
| 4     | `sed -i 's/DB_USERNAME=root/DB_USERNAME=user_database/' .env` | Mengganti username database di file `.env`.                   |
| 5     | `sed -i 's/DB_PASSWORD=/DB_PASSWORD=password_database/' .env` | Mengganti password database di file `.env`.                   |
| 6     | `php artisan migrate`                                         | Jalankan migrasi untuk membuat tabel di database.             |
| 7     | `php artisan serve`                                           | Menjalankan server pengembangan Laravel.                      |

Gantilah `nama-proyek-anda`, `nama_database`, `user_database`, dan `password_database` dengan pengaturan yang sesuai dengan konfigurasi Anda.

### 2. Copy Paste Program dari Repository Orang Lain

Jika Anda ingin meng-copy program dari repository orang lain di GitHub dan menjalankannya di desktop Anda, ikuti langkah-langkah berikut:

| Tahap | Perintah                                                      | Penjelasan                                                   |
|-------|---------------------------------------------------------------|--------------------------------------------------------------|
| 1     | `git clone https://github.com/username/repository.git`         | Meng-clone repository dari GitHub ke mesin lokal Anda.       |
| 2     | `cd repository`                                               | Masuk ke direktori proyek yang di-clone.                      |
| 3     | `composer install`                                            | Menginstal semua dependensi yang diperlukan oleh Laravel.    |
| 4     | `cp .env.example .env`                                        | Membuat file `.env` dari contoh yang disediakan.             |
| 5     | `php artisan key:generate`                                    | Generate application key.                                    |
| 6     | `sed -i 's/DB_DATABASE=laravel/DB_DATABASE=nama_database/' .env` | Mengganti nama database di file `.env`.                       |
| 7     | `sed -i 's/DB_USERNAME=root/DB_USERNAME=user_database/' .env` | Mengganti username database di file `.env`.                   |
| 8     | `sed -i 's/DB_PASSWORD=/DB_PASSWORD=password_database/' .env` | Mengganti password database di file `.env`.                   |
| 9     | `php artisan migrate`                                         | Jalankan migrasi untuk membuat tabel di database.             |
| 10    | `php artisan serve`                                           | Menjalankan server pengembangan Laravel.                      |

Gantilah `username/repository`, `nama_database`, `user_database`, dan `password_database` sesuai dengan konfigurasi Anda dan repository yang diinginkan.

### 3. Akses Aplikasi

Setelah menjalankan perintah di atas, Anda dapat mengakses aplikasi Laravel di `http://localhost:8000`.

## Struktur Direktori Laravel

Berikut adalah struktur direktori dasar dalam proyek Laravel:

| Direktori  | Penjelasan                                                                 |
|------------|----------------------------------------------------------------------------|
| `app/`     | Berisi kode aplikasi, termasuk model, controller, dan lainnya.             |
| `bootstrap/`| Berisi file untuk bootstrapping framework.                                |
| `config/`  | Berisi file konfigurasi untuk aplikasi.                                    |
| `database/`| Berisi file migrasi, seeder, dan database.                                 |
| `public/`  | Direktori root yang dapat diakses secara publik. Berisi file `index.php`.  |
| `resources/`| Berisi view, bahasa, dan aset yang digunakan oleh aplikasi.               |
| `routes/`  | Berisi file rute aplikasi.                                                 |
| `storage/` | Berisi file log, cache, dan lainnya.                                       |
| `tests/`   | Berisi tes unit dan fungsional.                                            |
| `vendor/`  | Berisi dependensi pihak ketiga yang diinstal oleh Composer.                |

## Dokumentasi Resmi

Untuk informasi lebih lanjut, Anda dapat merujuk ke [dokumentasi resmi Laravel](https://laravel.com/docs/8.x).
