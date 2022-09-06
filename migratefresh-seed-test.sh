#!/bin/bash
php artisan view:clear
php artisan migrate:fresh --seed
php artisan test
php artisan view:clear