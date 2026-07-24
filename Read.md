# Blog Management System

A responsive and secure Blog Management System developed using **PHP**, **MySQL**, **HTML**, **CSS**, and **JavaScript**. This project was built as the final submission for **ApexPlanet Software Pvt. Ltd. - Web Development Internship (Task 5)**.

---

## 📌 Project Overview

The Blog Management System allows users to register, log in, and manage blog posts through a clean and user-friendly interface. It includes authentication, CRUD operations, search functionality, pagination, and security enhancements.

---

##  Features

### 👤 User Authentication
- User Registration
- Secure Login
- Logout
- Session Management

###  Blog Management
- Create Blog Posts
- View Blog Posts
- Edit Blog Posts
- Delete Blog Posts

### 🔍 Search & Navigation
- Search blog posts
- Pagination for better navigation

### 🔒 Security Features
- Password Hashing (`password_hash()`)
- Password Verification (`password_verify()`)
- SQL Injection Protection (Prepared Statements)
- Session Authentication
- Input Validation
- XSS Prevention (`htmlspecialchars()`)

### 🎨 User Interface
- Responsive Design
- Modern Dashboard
- Clean Navigation
- Mobile Friendly

---

## 🛠️ Technologies Used

| Technology | Purpose |
|------------|---------|
| PHP | Backend Development |
| MySQL | Database |
| HTML5 | Structure |
| CSS3 | Styling |
| JavaScript | Client-side Functionality |
| XAMPP | Local Development Server |

---

## 📂 Project Structure

```
BLOG_SYSTEM/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── includes/
│   ├── db.php
│   ├── auth.php
│   ├── header.php
│   ├── navbar.php
│   └── footer.php
│
├── uploads/
│
├── index.php
├── register.php
├── login.php
├── logout.php
├── dashboard.php
├── add_post.php
├── edit_post.php
├── delete_post.php
├── view_post.php
├── search.php
├── database.sql
└── README.md
```

---

##  Installation Guide

### Step 1

Clone the repository

```bash
git clone https://github.com/manjuchollangi23/blog-crud-system
```

### Step 2

Move the project into the **htdocs** folder.

```
C:\xampp\htdocs\
```

### Step 3

Start:

- Apache
- MySQL

using XAMPP.

### Step 4

Open phpMyAdmin.

Create a database named:

```
blog_system
```

### Step 5

Import:

```
database.sql
```

### Step 6

Open the project in your browser.

```
http://localhost/blog_system/
```

---

## Database

### Users Table

- id
- name
- email
- password
- created_at

### Posts Table

- id
- title
- content
- user_id
- created_at
- updated_at

---

##  Testing

The following features were tested successfully:

- ✅ User Registration
- ✅ User Login
- ✅ Logout
- ✅ Session Authentication
- ✅ Add Post
- ✅ Edit Post
- ✅ Delete Post
- ✅ View Posts
- ✅ Search Functionality
- ✅ Pagination
- ✅ Password Hashing
- ✅ SQL Injection Protection

---

##  Screenshots

Add screenshots here:

- Home Page
- Login Page
- Registration Page
- Dashboard
- Add Post
- Search
- Pagination

---

##  Future Enhancements

- Profile Management
- Image Upload for Blog Posts
- Categories and Tags
- Comments System
- Likes and Reactions
- Rich Text Editor
- Email Verification

---

##  Author

** MANJUSHA CHOLLANGI **

B.Tech – Computer Science Engineering

---

## Internship

**ApexPlanet Software Pvt. Ltd.**

**Web Development Internship**

**Task 5 – Final Project**

---

##  Acknowledgement

This project was developed as part of the ApexPlanet Web Development Internship to demonstrate practical skills in PHP, MySQL, authentication, CRUD operations, search, pagination, and secure web application development.