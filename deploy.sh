#! /bin/sh
composer dumpautoload -o &&
php artisan optimize &&
php artisan config:clear &&
php artisan cache:clear &&
php artisan route:clear &&
date
