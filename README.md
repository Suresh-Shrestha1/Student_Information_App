# 🎓 Student Information App

This is a simple web application built with PHP and MySQL to manage student information. You can add, view, and delete student records using a user-friendly interface.
> ✅ Ideal for beginners who want hands-on experience building real-world PHP/MySQL projects.

---

## 🚀 Features

- ➕ Add new student records (Roll No, Name, Address, Gender, Class, Faculty, Mobile No)
- 📄 View all student records in a table
- ❌ Delete student records
- 💾 All data stored in a MySQL database
- 🎨 Simple and clean interface using HTML & CSS
- 🔗 Easily customizable and extendable for further learning

---

## 📚 What You'll Learn
By building and running this project, you’ll gain experience with:
- How to use PHP to interact with MySQL
- Writing SQL queries for data insertion, retrieval, and deletion
- Creating and handling HTML forms
- Using GET and POST methods
- Organizing a small PHP project
- Understanding how CRUD operations work in web apps

---

## 🧰 Technologies Used
- Frontend: HTML, CSS
- Backend: PHP
- Database: MySQL
- Local Server: XAMPP (Apache + MySQL)

---

## 📦 Prerequisites

Before running this app, make sure you have the following installed:
- ✅ [XAMPP](https://www.apachefriends.org/) or any local server with PHP and MySQL
- ✅ A web browser (like Chrome, Firefox, Edge)
- ✅ Basic knowledge of how to run PHP files on localhost

---

## ⚙️ Setup Instructions

### 1️⃣ Start XAMPP

- Open **XAMPP Control Panel**.
- Start both **Apache** and **MySQL** modules.

### 2️⃣ Create the Database

1. Open your browser and go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Click **New** in the sidebar to create a new database.
3. Enter `student` as the database name and click **Create**.
4. Inside the `student` database, go to the **SQL** tab and paste the following code:

    ```sql
    CREATE TABLE info (
        Roll INT PRIMARY KEY,
        Name VARCHAR(100),
        Address VARCHAR(255),
        Gender VARCHAR(10),
        Class VARCHAR(50),
        Faculty VARCHAR(100),
        Mobile VARCHAR(10)
    );
    ```
5. Click **Go** to execute the SQL query.

---
