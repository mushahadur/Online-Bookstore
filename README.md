<h2 align="center">This is my Online Bookstore Project</h2>

## Installing  Project
=>It is php 8.1.2 version
- git clone
- composer install
- php artisan key:generate
- php artisan migrate:fresh --seed

## About Project

online bookstore application using PHP Laravel that allows users to browse, search, and purchase books. The application should showcase OOP principles, utilize Laravel's features.

## Objective:
 Create an online bookstore application using PHP Laravel that allows users to browse, search, and purchase books. The application should showcase OOP principles, utilize Laravel's features, implement RESTful APIs, and demonstrate the use of middleware for authentication and authorization.


## Key Features:
1. *User Registration and Authentication:* - Users can register, login, and manage their profiles. - Implement middleware for user authentication and authorization to ensure secure access to certain features.
2. *Book Catalog:* - Create a database of books with attributes such as title, author, genre, price, and cover image. - Implement a RESTful API to retrieve book information (GET request) and allow administrators to add, update, or delete books (POST, PUT, DELETE requests).
 3. *User Roles:* - Define user roles such as "Customer" and "Administrator." - Admins have additional privileges like managing books and user accounts.