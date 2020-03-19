#!/bin/sh
#Shebang to choose the soft who is gonna be used to execute the script

# Change to the project directory
cd /var/www/abbe-biere/

# Turn on maintenance mode
php artisan down

# Pull the latest changes from the git repository
git pull origin master

# Install/update composer dependecies
composer install --no-dev --no-interaction --optimize-autoloader

# Run database migrations
php artisan migrate --force

# Clear caches
php artisan cache:clear


#php artisan auth:clear-resets

# Clear and cache routes
#php artisan route:clear
#php artisan route:cache

# Clear and cache config
#php artisan config:clear
php artisan config:cache

# Install node modules
# npm install

# Build assets using Laravel Mix
# npm run production

# Turn off maintenance mode
php artisan up
