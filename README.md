<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## Hotel Management

Laravel-based application that lets customers view room facilities, pricing, and availability based on check-in and check-out dates.  
A full admin panel is included to manage hotel room data via CRUD operations.

## Technology Stack

-   Laravel 10
-   Eloquent ORM
-   Blade Templates
-   Database Migration/Seeding
-   Authentication (including Google Socialite)

## Features

### User Side:

-   Google-based user authentication.
-   Filter available rooms by check-in and check-out dates.
-   "My Bookings" page to view all reservations.
-   User profile management.
-   Input validation.

### Admin Side:

-   Admin login.
-   Dashboard to add, update, and toggle room visibility.
-   View all customer bookings.

## How to Use

1. Clone the repository with `git clone`
2. Copy `.env.example` to `.env` and configure your database
3. Run `composer install`
4. Run `php artisan key:generate`
5. Run `php artisan migrate --seed` (includes sample seeded data)
6. Start the server with `php artisan serve`
