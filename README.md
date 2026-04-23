# Portfolio CMS - CodeIgniter 4

A personal portfolio website equipped with a **Content Management System (CMS)** to manage content such as profile, projects, blog posts, and more. This project is built using **CodeIgniter 4** and is designed to be easy to extend and open for contributions.

![Version](https://img.shields.io/github/v/release/wafley/cms-portfolio)
![License](https://img.shields.io/github/license/wafley/cms-portfolio)
![Issues](https://img.shields.io/github/issues/wafley/cms-portfolio)
![Pull Requests](https://img.shields.io/github/issues-pr/wafley/cms-portfolio)
![Last Commit](https://img.shields.io/github/last-commit/wafley/cms-portfolio)
![CodeIgniter](https://img.shields.io/badge/framework-CodeIgniter-red)
![Code Size](https://img.shields.io/github/languages/code-size/wafley/cms-portfolio)
![Contributors](https://img.shields.io/github/contributors/wafley/cms-portfolio)
[![Follow @wafley](https://img.shields.io/badge/Follow-%40wafley-blue?style=social&logo=github)](https://github.com/wafley)

## Main Features

* Portfolio content management (CRUD)
* Admin dashboard
* Authentication & authorization
* Project / experience management
* Article / blog management
* Responsive design
* CMS based on CodeIgniter 4

## Technologies Used

* **Backend**: CodeIgniter 4
* **Frontend**: Admin (Azira) and Public (FolioOne)
* **Database**: MySQL / MariaDB
* **Auth**: CI4 Session

## System Requirements

Make sure your environment meets the following requirements:

* PHP >= 8.0
* Composer
* Web Server (Apache / Nginx)
* MySQL / MariaDB
* Git

## Installation Guide

### 1. Clone Repository

```bash
git clone https://github.com/username/portfolio-ci4.git
cd portfolio-ci4
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Copy Environment File

```bash
cp env .env
```

### 4. Setup Assets (Important)

Since image assets and frontend libraries are not included in the Git repository, you need to download them manually:

1. **Download Assets**: Open the following Google Drive link:
   [https://drive.google.com/file/d/1O7-cqbjOU7Kpp2KeVDh4-ypjGk6YMAYU/view?usp=sharing](https://drive.google.com/file/d/1O7-cqbjOU7Kpp2KeVDh4-ypjGk6YMAYU/view?usp=sharing)
2. **Extract File**: Extract the downloaded `.zip` file
3. Move/copy the extracted folder into: `public/assets/`

### 5. Configure `.env` File

Open the `.env` file and adjust the database configuration according to your setup.

### 6. Generate Application Key

```bash
php spark key:generate
```

### 7. Run Database Migration

```bash
php spark migrate
```

### 8. Run Seeder (Required)

Running the seeder is very important to initialize the initial data (such as admin account and site settings). Without this step, you will not be able to log in to the dashboard.

```bash
php spark db:seed DatabaseSeeder
```

> **Note:** The default data (email, password, etc.) inserted by the seeder can be modified in `app/Database/Seeds/UserSeeder.php` before running the command above.

### 9. Run Development Server

```bash
php spark serve
```

Access via: `http://localhost:8080`

---

## Default Admin Account

After running the seeder, use the following credentials:

* **Username**: `admin`
* **Password**: `12345678`

> **Important:** Immediately change the password and profile data through the admin dashboard after your first login.

## Important Folder Structure

```text
app/
├── Config/
├── Controllers/
├── Database/
│   ├── Migrations/
│   └── Seeds/      <-- Initial data modification (seeder)
├── Models/
├── Views/
public/
├── assets/
```

## 🤝 Contributing

Contributions are very welcome! Feel free to create issues or pull requests.
Any contribution, no matter how small, is greatly appreciated ❤️

## License

This project uses the **MIT License**.

---

⭐ Don’t forget to star this repository to support its development!
