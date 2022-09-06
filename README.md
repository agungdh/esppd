
### System Requirement (Dev)

1. PHP 8.1
1. Composer
1. NodeJS 16
1. MariaDB
1. Redis (Optional)

### Installation (Dev)

1. copy .env.example to .env and setting it
1. `composer install`
1. `npm install`
1. `npm run build`
1. `php artisan migrate:fresh --seed`