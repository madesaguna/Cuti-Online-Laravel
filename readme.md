# Cuti Online
This is the part of HRIS (Human Resources Information System) for managing leaves in office or institution. This application was created by [Reasna](https://github.com/reasna) for final project. I modify this app to meet our institution needs.

## Installation
copy `.env.example` to `.env` and modify :
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_pass
```
run following command
`php artisan key:generate`
`php artisan migrate --seed` or `php artisan migrate:fresh --seed` if you want to restore all data to default value.
`php artisan serve`

enjoy it
