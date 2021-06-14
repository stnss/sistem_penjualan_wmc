## About Sistem Penjualan WMC

Sistem Penjualan WMC merupakan sebuah aplikasi untuk membantu TOKO WMC dalam menjual Produk yang mereka jual. Sistem ini dibuat menggunakan PHP Framework [Laravel](https://laravel.com/).

## Installation Instructions
- ** Run Composer
``` composer install ```

- ** Copy .env.example file and rename into .env
- ** Change your database name in .env file
- ** Run Artisan Command
```
php artisan key:generate
php artisan migrate
```
- ** Run Application
``` php artisan serve ```