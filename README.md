# Laravel Task Management App

This is a simple Task Management application built with Laravel. 
It demonstrates basic **CRUD (Create, Read, Update, Delete)** operations using Laravel's MVC structure. 
Tasks are associated with users, and there's no authentication implemented — instead, tasks are accessed using the `user_id` parameter.

## Features

- Create, view, update, and delete tasks
- Associate tasks with specific users using `user_id`
- Blade views styled with Bootstrap
- Eloquent model relationships
- Input validation for task creation and editing
- Seeder to populate database with demo users

## Tech Stack

- Laravel 10+
- PHP 8+
- Bootstrap 5
- MySQL
- Blade Templating
- Eloquent ORM

Follow the steps below to set up the project locally:

### 1. Clone the Repository

git clone the repository
cd task-manager

### Install Dependencies
composer install

### Create .env File
cp .env.example .env

Edit the .env file to configure your database connection:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

### Generate App Key
php artisan key:generate

### Run Migrations and Seeders
php artisan migrate --seed

### Serve the Application
php artisan serve
