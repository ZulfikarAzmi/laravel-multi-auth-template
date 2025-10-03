# Laravel Multi-Auth Template

This is a **Laravel Multi-Auth Template** that provides a basic setup
for authentication with multiple roles (Admin & User).\
It is designed as a starting point for building projects that require
role-based authentication and dashboards.

------------------------------------------------------------------------

## ⚙️ Installation

### 1. Clone the repository

``` bash
git clone https://github.com/ZulfikarAzmi/laravel-multi-auth-template.git
cd laravel-multi-auth
```

### 2. Install dependencies

``` bash
composer install
npm install && npm run dev
```

### 3. Setup environment

Copy `.env.example` to `.env` and update your database configuration:

``` bash
cp .env.example .env
```

Update the following in `.env` file:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=multi_auth_db
    DB_USERNAME=root
    DB_PASSWORD=

### 4. Generate app key

``` bash
php artisan key:generate
```

### 5. Run migrations

``` bash
php artisan migrate
```

### 6. Serve the application

### 7. Run seeders

After running the migrations, you can seed the database with default roles and an admin user:

```bash
php artisan db:seed

``` bash
php artisan serve
```

Now open <http://127.0.0.1:8000>

------------------------------------------------------------------------

## 👤 Default Roles

-   **Admin** → Has access to `/admin/dashboard`
-   **User** → Has access to `/user/dashboard`

You can modify roles in the `users` table (`role` column).

------------------------------------------------------------------------


