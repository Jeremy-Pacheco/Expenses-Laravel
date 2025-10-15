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
composer install
npm install
php artisan migrate
php artisan serve
```

## ✒️ Authors

- [**Jeremy-Pacheco**](https://github.com/Jeremy-Pacheco) – *Project Creator & Main Developer* 🧑‍💻  
  - Implemented **Laravel Breeze** authentication  
  - Added full **multi-user expense CRUD** system  
  - Configured **migrations**, **seeders**, and **validation**

