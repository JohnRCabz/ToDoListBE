# Task Management System

A full-stack task management system built with **Laravel** (API backend) and **Vue.js** (frontend) that allows users to manage tasks by priority and status.

---

## 🧱 Tech Stack

-   **Backend:** Laravel 11
-   **Frontend:** Vue.js 3 (Composition API)
-   **Database:** MySQL
-   **Authentication:** Laravel Sanctum

---

## ⚙️ Features

-   User authentication (login/register)
-   Create, Read, Update User
-   Change Password
-   Create, Read, Update, Delete Tasks
-   Set task `priority`: `LOW`, `MEDIUM`, `HIGH`
-   Track task `status`: `PENDING`, `COMPLETED`
-   Aggregate task counts by status and priority

---

## 🔐 API Endpoints (Laravel)

| Method | Endpoint               | Description                    |
| ------ | ---------------------- | ------------------------------ |
| POST   | `/api/register`        | Register                       |
| POST   | `/api/login`           | login                          |
| POST   | `/api/logout`          | logout                         |
| POST   | `/api/change-password` | change password                |
| GET    | `/api/user/profile`    | view user profile              |
| PUT    | `/api/user/{email}`    | update user profile            |
| PUT    | `/api/user/statistics` | get user task statistics       |
| GET    | `/api/tasks`           | List all tasks                 |
| GET    | `/api/tasks/{id}`      | view task detail               |
| POST   | `/api/tasks`           | Create new task                |
| PUT    | `/api/tasks/{id}`      | Update task                    |
| DELETE | `/api/tasks/{id}`      | Delete task                    |

## 🖥️ Frontend (Vue.js)

-   **Vue Router** for navigation
-   **Pinia** for state management
-   Axios to interact with Laravel API
-   Composition API
-   shadcn/vue for reusable components
-   tanstack/query for asynchronus state and data handling
