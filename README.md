# 🍔 BurgerBoard API

**BurgerBoard API** is the backend service for the BurgerBoard fullstack application. Built with **Laravel 12**, it handles authentication, user management, orders, products, categories, and role-based permissions.

---

## 🚀 Features

-   User registration, login, and logout
-   Sanctum-based authentication
-   Role-based access with policies
-   Order processing with product associations
-   Admin endpoints to update order status and product availability
-   RESTful API endpoints for products, orders, and categories

---

## 🔐 Authentication

-   Authenticated routes are protected with `auth:sanctum` middleware
-   Public routes include user registration and login

---

## 📦 API Endpoints Overview

### Public

-   `POST /register` — Register a new user
-   `POST /login` — Login user and receive token

### Protected (requires token)

-   `GET /user` — Get authenticated user's information
-   `POST /logout` — Logout the user
-   `GET /orders` — List user orders
-   `POST /orders` — Create a new order
-   `PUT /orders/state` — Admin: Change order status
-   `GET /products` — List products
-   `PUT /products/toggle` — Admin: Toggle product availability
-   `GET /categories` — List categories

---

## 🧱 Models & Policies

### Models

-   `User`
-   `Product`
-   `Order`
-   `OrderProduct`

### Policies

-   `ProductPolicy`
-   `OrderPolicy`

Used to determine if a user has permission to create/update/delete specific resources.

---

## 🗃️ Database Setup

### Migrations

Includes Laravel default migrations and additional:

-   `create_categories_table`
-   `create_products_table`
-   `create_orders_table`
-   `create_order_products_table`
-   `add_column_isadmin_to_users_table`

### Seeders

-   `CategorySeeder`
-   `ProductSeeder`
-   `DatabaseSeeder`

---

## ⚙️ Environment

-   **Laravel Version:** 12
-   **PHP Version:** 8.2
-   **Database:** MySQL
-   **No Docker/Sail used**

Required .env keys:

```env
DB_DATABASE=burgerboard
DB_USERNAME=root
DB_PASSWORD=secret
```

---

## 📥 Example API Requests

### 1. Login

```bash
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{"email": "user@example.com", "password": "password"}'
```

### 2. Get Authenticated User

```bash
curl -X GET http://localhost:8000/api/user \
  -H "Authorization: Bearer <your_token_here>"
```

### 3. Get Orders

```bash
curl -X GET http://localhost:8000/api/orders \
  -H "Authorization: Bearer <your_token_here>"
```

### 4. Complete an Order (Admin Only)

```bash
curl -X PUT http://localhost:8000/api/orders/state \
  -H "Authorization: Bearer <admin_token_here>" \
  -H "Content-Type: application/json" \
  -d '{"order_id": 1, "status": "completed"}'
```

---

## 📄 License

This project is open source and available for anyone to use.

---

## 🔗 Related

Frontend Repository: [BurgerBoard React App](https://github.com/Diego3128/burgerboard-frontend)
