# Personal Task Manager

A simple Personal Task Manager web application built with Laravel for a school mini-project.

## Project Information

- Project Code: WST21-PM-2026-SF
- Student Name: Jian Chris Burday
- Course & Year: BSIT2 SECTION9
- Database Used: SQLite

## Features

- Add a new task
- View task details
- Edit an existing task
- Delete a task
- Set task status to Pending or Completed
- Add a task description
- Set a due date
- Store tasks in a database

## Technologies Used

- Laravel
- PHP
- Blade
- SQLite
- HTML
- CSS

## Task Fields

The tasks table contains:

- `id`
- `task_name`
- `description`
- `status`
- `due_date`

## How to Run

1. Clone or download the project.
2. Open the project folder in VS Code.
3. Install PHP dependencies:

```bash
composer install

4. Run database migrations: php artisan migrate
5. Start the Laravel development server: php artisan serve
6. Open the application in a browser: http://127.0.0.1:8000

CRUD Operations

This project demonstrates the four basic CRUD operations:

Create - Add a new task
Read - View tasks and task details
Update - Edit task information
Delete - Remove a task