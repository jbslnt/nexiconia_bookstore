# Nexiconia a Websystem E-Commerce

A Laravel-based e-commerce application for browsing products, managing a shopping cart, and placing orders. The project also includes an admin area for managing products and updating order status.

## Stack

- PHP 8.0.2 or newer
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

- PHP and the required PHP extensions for Laravel
- Composer
- Node.js and npm
- MySQL

The repository already contains the Composer and npm dependencies in the current development workspace, but the installation steps below are included for a fresh checkout.

## Installation

From the project directory:

```powershell
composer install
npm install
copy .env.example .env
php artisan key:generate
```

Create a MySQL database named `nexiconia`, or change the database values in `.env` to match your local database:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nexiconia
DB_USERNAME=root
DB_PASSWORD=
```

Run the migrations:
```powershell
php artisan migrate
```

The default `DatabaseSeeder` does not create products or users. Add initial records through the application or with Laravel Tinker:
```powershell
php artisan tinker
```

For an administrator account, set that user's `usertype` column to `1` in the database after registration.
