## Clone repository

## Project setup
```
composer install
```

## Clone .env.example to .env and set your connection to DB
```
cp .env.example .env
```

## Generate APP_KEY
```
php artisan key:generate
```

## Do migrations
```
php artisan migrate
```

## Run program
```
php artisan serve
```
