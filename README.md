# ProdHub - Simple Product Management (CRUD & Auth)

ProdHub is a lightweight, modern web application built with Laravel 11 designed for internal product inventory management. This project features secure user authentication (Login and Registration) and complete CRUD (Create, Read, Update, Delete) capabilities to manage product data effortlessly. 

The interface has been fully customized with a premium, clean, and elegant design, replacing default templates with refined layouts, modern pastel action buttons, and beautiful interactive alerts powered by SweetAlert2.

---

## 🚀 Tech Stack

This project is built using the following technologies:

* **Backend Framework:** Laravel 11 (PHP 8.2+)
* **Frontend Styling:** Tailwind CSS (compiled via Vite)
* **Authentication Starter Kit:** Laravel Breeze
* **Database:** MySQL / MariaDB (via XAMPP)
* **Interactive Alerts:** SweetAlert2 (via CDN Integration)

---

## ✨ Features

* **Elegant Landing Page:** A minimalist, clean presentation introducing the system.
* **Secure Authentication:** Complete user registration, login, session handling, and route protection.
* **Seamless Navigation:** Quick access links integrated elegantly into the application navbar.
* **Full Product CRUD:**
    * **Create:** Dynamic form with currency guidance (`Rp 1.000,00`).
    * **Read:** Clean responsive table layout featuring automatic empty-state graphics if data is absent.
    * **Update:** A warm, context-aware editing form to update asset values.
    * **Delete:** Powered by **SweetAlert2** for elegant, non-intrusive confirmation popups.

---

## 📋 Prerequisites

Before you begin, ensure you have the following installed on your local machine:
1. **XAMPP** (with PHP 8.2 or higher) -> [Download XAMPP](https://www.apachefriends.org/)
2. **Composer** (PHP package manager) -> [Download Composer](https://getcomposer.org/)
3. **Node.js & NPM** (for compiling frontend assets) -> [Download Node.js](https://nodejs.org/)
4. **Git** -> [Download Git](https://git-scm.com/)

---

## 💻 Step-by-Step Installation & Local Setup Guide

Follow these exact steps to clone, configure, and run the project locally:

### 1. Clone the Repository
Open your terminal (or Git Bash), navigate to your web server directory (e.g., `C:/xampp/htdocs/` if using XAMPP), and run:
```bash
git clone [https://github.com/ibrahimahmads/laravel-project.git](https://github.com/ibrahimahmads/laravel-project.git)
cd laravel-project
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# make your .env
cp .env.example .env

# make database in php myadmin with name crud_login or same like your env

# generate application encryption key
php artisan key:generate

# run database migrations
php artisan migrate

# Compile and build production-ready Tailwind CSS assets
npm run build

# Launch the local server
php artisan serve
```
