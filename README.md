<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Hotel Management

Laravel based application that lets customers view room facilities, price, and availability of the room according to their check-in and check-out dates and book the room of their choice.  
A full admin panel is created to perform all CRUD operations for managing hotel rooms.

**New Features (Ongoing):**
- Integrated ToyyibPay payment gateway for deposit payments.
- Booking payment tracking:
  - User pays a deposit during booking.
  - Admin sees payment status as "Paid Deposit".
  - When customer arrives and pays in full, admin updates booking status to "Full Paid".
- Automatic email notifications:
  - Admin receives receipt email when a user pays a deposit.
  - Receipt email also generated when admin updates booking to full payment.
- Ability to print receipt status based on payment stage.

## Technology Stack
- Laravel 10
- Eloquent ORM
- Blade Templates
- Database Migration/Seeding
- Authentication

## Features

### User Side:
- User Login with both Traditional (Email/Password) and Google Sign-In/Sign-Up (via Socialite) 
- Filter all available rooms based on check-in and check-out dates  
- "My Bookings" page to view all bookings  
- Update user profile  
- User input validation  
- **(Ongoing)** ToyyibPay payment gateway for deposit  
- **(Ongoing)** View current booking payment status and downloadable receipt  

### Admin Side:
- Admin Login with both Traditional (Email/Password) and Google Sign-In/Sign-Up (via Socialite)
- Dashboard for adding/editing rooms and managing visibility  
- Display all bookings  
- **(Ongoing)** View payment status (Paid Deposit / Full Paid)  
- **(Ongoing)** Receive receipts by email after deposit or full payment  
- **(Ongoing)** Mark booking as completed once full payment is received  
- **(Ongoing)** Generate and print payment receipts  

## How to Use

1. Clone the repository  
2. Copy `.env.example` file to `.env` and edit database credentials  
3. Run `composer install`  
4. Run `php artisan key:generate`  
5. Run `php artisan migrate --seed` (it has some seeded data for testing)  
6. Run `php artisan serve`
