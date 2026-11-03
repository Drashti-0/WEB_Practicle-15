# StudentHub Portal - Final Integration Project

StudentHub is a web portal designed for students to access academic information, upcoming events, contact details, and resources in one place.

## Features
- **Authentication:** Student Login and Logout functionality with session management.
- **Dashboard:** Clean navigation interface connecting all modules.
- **Modules:** About Us, Contact Us, and Upcoming Events listings.
- **Database Integration:** MySQL backend for credential verification and event records.

## Tech Stack
- **Frontend:** HTML5, CSS3
- **Backend:** PHP (v8.x)
- **Database:** MySQL
- **Server:** Apache (XAMPP / WAMP)

## Setup & Installation Instructions

### 1. Prerequisites
- Install XAMPP Server on your local machine.

### 2. File Setup
- Clone or copy the project repository into the `htdocs` directory:
  `C:\xampp\htdocs\studenthub`

### 3. Database Configuration
1. Open XAMPP Control Panel and start **Apache** and **MySQL**.
2. Open your browser and navigate to `http://localhost/phpmyadmin`.
3. Create a database named `studenthub`.
4. Import the `studenthub.sql` file into the `studenthub` database.

### 4. Running the Application
- Open your browser and visit: `http://localhost/studenthub/index.php`

## Default Credentials
- **Student ID:** `25cs003`
- **Password:** `1234`