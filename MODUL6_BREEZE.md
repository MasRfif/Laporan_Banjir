# Modul 6 Authentication - Laravel Breeze

Project ini adalah salinan terpisah untuk materi Breeze. Jangan mencampur route/controller Breeze dengan project manual karena keduanya memiliki route bernama `login`, `register`, dan `logout`.

## Hasil instalasi

- `composer.json` dan `composer.lock`: package `laravel/breeze`.
- `routes/auth.php`: route register, login, logout, reset password, dan verifikasi email.
- `app/Http/Controllers/Auth/`: controller authentication hasil Breeze.
- `resources/views/auth/`: view authentication hasil Breeze.
- `resources/views/layouts/app.blade.php` dan `layouts/navigation.blade.php`: layout/navigation Breeze.
- `resources/css/app.css` dan `resources/js/app.js`: asset Tailwind/Vite.
- `public/build/`: hasil `npm run build`.
- `routes/web.php`: dashboard/profil Breeze serta form publik dan daftar laporan protected.
- `app/Http/Controllers/LaporanController.php`, `app/Models/Laporan.php`, migration laporan, dan `PetugasSeeder.php`: fitur laporan serta data uji dari project manual.

## Menjalankan

```bash
composer install
npm install
npm run dev
```

Pada terminal kedua:

```bash
php artisan migrate:fresh --seed
php artisan serve
```

Buka `http://127.0.0.1:8000`. Breeze menyediakan `/login`, `/register`, `/logout`, `/dashboard`, dan profil. Form warga tetap tersedia pada `/laporbanjir`, sedangkan daftar laporan pada `/laporan` membutuhkan login.

## XAMPP/phpMyAdmin

Buat database `laravel` di phpMyAdmin, lalu pastikan `.env` berisi `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, `DB_DATABASE=laravel`, `DB_USERNAME=root`, dan password sesuai XAMPP. Jalankan `php artisan config:clear` lalu `php artisan migrate:fresh --seed`. Password akun seeder tersimpan sebagai hash.
