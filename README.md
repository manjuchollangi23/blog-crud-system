# 🛡️ Blog CRUD Application

##  Overview

A secure Blog CRUD Application developed using **PHP** and **MySQL** with user authentication and role-based access control. Users can register, log in, and manage blog posts through Create, Read, Update, and Delete (CRUD) operations. The application follows secure coding practices, including password hashing, prepared statements, and session management.

---

##  Features

### User Authentication
- User Registration
- User Login & Logout
- Password Hashing (`password_hash()`)
- Password Verification (`password_verify()`)
- Session Management

### Blog Management
- Create Blog Posts
- View Blog Posts
- Update Blog Posts
- Delete Blog Posts

### Security Enhancements
- Prepared Statements (SQL Injection Protection)
- XSS Protection using `htmlspecialchars()`
- Client-side Form Validation
- Server-side Form Validation
- Secure Session Handling

### User Roles
- Admin Role
- Editor Role
- Role-Based Access Control (RBAC)
- Admin-only Delete Permission
- Admin Dashboard

### Additional Features
- Search Functionality
- Pagination
- Responsive User Interface

---

## 🛠️ Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- XAMPP
- Git & GitHub

---

## 📁 Project Structure

```
blog_system_task4/
│── index.php
│── register.php
│── login.php
│── logout.php
│── dashboard.php
│── add_post.php
│── edit_post.php
│── delete_post.php
│── db.php
│── style.css
```

---

## ▶️ How to Run

1. Install XAMPP.
2. Start **Apache** and **MySQL**.
3. Open **phpMyAdmin**.
4. Create a database named `blog`.
5. Import the SQL file into the database.
6. Place the project folder inside the **htdocs** directory.
7. Open your browser and visit:

```
http://localhost/blog_system_task4/
```

---

## 🔒 Security Features

- Password Hashing
- Password Verification
- SQL Injection Prevention
- Cross-Site Scripting (XSS) Protection
- Session Authentication
- Role-Based Authorization
- Secure CRUD Operations

---

##  Internship Progress

Completed as part of the **ApexPlanet Software Pvt. Ltd. Web Development Internship**.

### Tasks Completed

- ✅ Task 1 – BlogCMS Setup
- ✅ Task 2 – CRUD Operations
- ✅ Task 3 – Search Functionality & Pagination
- ✅ Task 4 – Security Enhancements

---

##  Future Enhancements

- Image Upload Support
- Rich Text Editor
- Categories & Tags
- Comments System
- User Profile Management
- Password Reset via Email
- REST API Integration
- Dark/Light Theme

---

⭐ If you like this project, consider giving it a star on GitHub.
