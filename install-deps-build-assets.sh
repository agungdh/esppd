#!/bin/bash
composer install && npm install && npm run build && php artisan view:clear