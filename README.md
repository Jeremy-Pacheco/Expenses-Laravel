<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 💰 Laravel Multi-User Expense Manager

This project is a **Laravel web application** that allows multiple users to register, log in, and manage their personal expenses securely.  
Each user can **create, read, update, and delete (CRUD)** their own expenses, while being restricted from accessing others’ data.  
The app uses **Laravel Breeze** for authentication and **Tailwind CSS + Vite** for styling and asset compilation.

---

## 🛠️ Built With

- [Laravel](https://laravel.com/) – Backend framework  
- [Laravel Breeze](https://laravel.com/docs/starter-kits#breeze) – Authentication system  
- [Tailwind CSS](https://tailwindcss.com/) – CSS styling  
- [Vite](https://vitejs.dev/) – Asset bundler  
- [MySQL](https://www.mysql.com/) – Database  
- [Composer](https://getcomposer.org/) – PHP dependency manager  
- [Node.js & npm](https://nodejs.org/) – JavaScript tooling  

---

## ✨ Features

- 🔐 **User Authentication** using [Laravel Breeze](https://laravel.com/docs/starter-kits#breeze) (Login, Register, Logout).  
- 👥 **Multi-User Support** — each user only sees their own expenses.  
- 💸 **Expense CRUD** — Create, Read, Update, Delete personal expenses.  
- 📊 **Expense Categories** — Food, Transport, Housing, Health, Education, Entertainment, Finance, Leisure, Others.  
- 📅 **Purchase Date tracking** for all expenses.  
- ✅ **Form Validation** for all inputs.  
- 🎨 **Tailwind CSS + Vite** for modern, fast, responsive UI.  
- ⚡ **Laravel Migrations & Seeders** for database setup.  

---

## 🚀 Getting Started

Follow these steps to set up the project locally for development and testing.

### 📋 Prerequisites

Make sure you have the following installed:

- PHP >= 8.1  
- Composer  
- Node.js and npm  
- MySQL 
- [Laragon](https://laragon.org/) or another local server (XAMPP, WAMP, etc.)

---

### 🔧 Installation


```bash
git clone https://github.com/Jeremy-Pacheco/Expenses-Laravel.git
cd Expenses-Laravel
cp .env.example.env
composer install
php artisan key:generate
php artisan migrate
php artisan serve
php install
php run dev
```

## ✒️ Authors

- [**Jeremy-Pacheco**](https://github.com/Jeremy-Pacheco) – *Project Creator & Main Developer* 🧑‍💻  
  - Implemented **Laravel Breeze** authentication  
  - Added full **multi-user expense CRUD** system  
  - Configured **migrations**, **seeders**, and **validation**