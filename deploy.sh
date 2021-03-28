#! /bin/sh
composer dumpautoload -o &&
php artisan optimize &&
php artisan config:clear &&
php artisan cache:clear &&
php artisan route:clear &&

# purge pagespeed cache
sudo rm -rf /var/cache/ngx_pagespeed/*
# restart nginx
sudo service nginx restart &&
date
