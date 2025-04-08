# Laravel Sanctum API

A RESTful API built with Laravel and Sanctum for authentication. It allows users to register, log in, and manage blog posts.

## Features

- User authentication with Laravel Sanctum
- User registration and login
- Create, read, update, and delete blog posts
- Post ownership and authorization

## Requirements

- PHP 8.1+
- Composer
- MySQL or SQLite

## Installation

1. Clone the repository:
git clone https://github.com/yourusername/laravel-sanctum-api.git
cd laravel-sanctum-api

2. Install dependencies:
composer install

3. Create a copy of the `.env` file:
cp .env.example .env

4. Generate an application key:
php artisan key

5. Configure your database in `.env`

6. Run migrations:
php artisan migrate

7. Start the server:
php artisan serve

## API Endpoints

### Authentication

- `POST /api/register` - Register a new user
- `POST /api/login` - Log in an existing user
- `GET /api/user` - Get authenticated user details
- `POST /api/logout` - Log out (requires authentication)

### Posts

- `GET /api/posts` - Get all posts (requires authentication)
- `POST /api/posts` - Create a new post (requires authentication)
- `GET /api/posts/{id}` - Get a specific post (requires authentication)
- `PUT /api/posts/{id}` - Update a post (requires authentication, user must be the post owner)
- `DELETE /api/posts/{id}` - Delete a post (requires authentication, user must be the post owner)

## Testing

Import the Postman collection provided in the repository to test all endpoints.