# Nexiconia Bookstore

A Laravel-based e-commerce application for browsing products, managing a shopping cart, and placing orders. The project also includes an admin area for managing products and updating order status.

## Stack

- PHP 8.3.x (recommended for the locked dependencies)
- Laravel 9
- Laravel Jetstream with Livewire
- Laravel Sanctum and Fortify
- MySQL
- Vite, Tailwind CSS, Alpine.js, and Axios

## Features

### Customers

- Browse the product catalog
- Search products by title
- View product arrival pages
- Register, log in, and manage an account
- Add products to a cart and remove cart items
- Place orders from the cart
- View the About page

### Administrators

- Add products with an image, title, author, genre, description, price, and quantity
- View, edit, and delete products
- View all orders
- Mark orders as delivered

The current application identifies administrator accounts with `users.usertype = 1`. Newly registered users use the default value `0`.

## Requirements

Install the following before starting the project:

- PHP 8.3.x
- Composer
- Node.js and npm
- MySQL

The Composer lock file contains packages that are not compatible with PHP 8.4 or newer. PHP 8.3 is recommended for this project.

The PHP CLI configuration must enable these extensions:

- `curl`
- `fileinfo`
- `openssl`
- `pdo_mysql`
- `zip`

## Installation on Windows

Open PowerShell in the project directory:

```powershell
cd D:\Workspace\nexiconia_bookstore
composer install
npm.cmd install
```

If PowerShell blocks `npm.ps1`, use `npm.cmd` as shown above. Alternatively, allow locally created scripts for your Windows user:

```powershell
Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned
```

Create the environment file and application key:

```powershell
Copy-Item .env.example .env
php artisan key:generate
```

If `.env` already exists, do not overwrite it; run only `php artisan key:generate`.

## Database configuration

Create a MySQL database named `nexiconia`, or change the database values in `.env` to match your local database:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nexiconia
DB_USERNAME=root
DB_PASSWORD=
```

`DB_USERNAME` and `DB_PASSWORD` must match the credentials configured for your local MySQL server.

Run the migrations:

```powershell
php artisan config:clear
php artisan migrate
```

## Running the application

Use two PowerShell terminals.

In terminal 1, start Laravel:

```powershell
cd D:\Workspace\nexiconia_bookstore
php artisan serve
```

In terminal 2, start Vite:

```powershell
cd D:\Workspace\nexiconia_bookstore
npm.cmd run dev
```

Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in a browser. Keep both terminals running during development.

To build frontend assets without the Vite development server:

```powershell
npm.cmd run build
php artisan serve
```

## Seed data and administrators

The default `DatabaseSeeder` does not create products or users. Add initial records through the application or with Laravel Tinker:

```powershell
php artisan tinker
```

For an administrator account, set that user's `usertype` column to `1` in the database after registration. Newly registered users use the default value `0`.

## Common setup issues

### Composer reports unsupported PHP versions

Use PHP 8.3.x and ensure that the PHP executable on `PATH` is the intended one:

```powershell
where.exe php
php --version
```

Do not use `composer install --ignore-platform-reqs`; it hides dependency and extension incompatibilities.

### Composer reports a missing PHP extension

Enable the extension in the active `php.ini`, then restart PowerShell. Check the active configuration and loaded modules with:

```powershell
php --ini
php -m
```

### Laravel reports `could not find driver`

Enable `extension=pdo_mysql` in the active `php.ini`, then run:

```powershell
php artisan config:clear
php artisan migrate
```

### MySQL reports access denied

Update `DB_USERNAME` and `DB_PASSWORD` in `.env` with the credentials for your local MySQL server, then clear Laravel's cached configuration:

```powershell
php artisan config:clear
```
