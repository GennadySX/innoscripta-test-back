#! /bin/bash

clear

php artisan migrate:fresh

php artisan db:seed

sudo chown  -R 0775 ./storage/ ./bootstrap/cache/
sudo chmod 777 -R ./storage/ ./bootstrap/cache/

php artisan passport:install
