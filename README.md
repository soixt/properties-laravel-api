## Properties app

Application deployment process:

- clone the repo
- cd into cloned repo
- run composer install
- run php artisan migrate
- run php artisan db:seed --class=PropertySeeder
- Locally run php artisan serve
