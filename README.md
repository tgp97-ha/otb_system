# ISN CRM

- Setting env (If you choice to use MySQL)
```sh
cp .env.example .env
---
Copy file ".env.example", and change its name to ".env". Then in file ".env" complete this database configuration:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=otb
DB_USERNAME=root
DB_PASSWORD=
```

- Install app's dependencies
```sh
$ composer install
```

- Install app's dependencies
```sh
$ npm install
```

- Generate laravel APP_KEY
```sh
php artisan key:generate
```

- Run database migration
```sh
$ php artisan migrate:refresh
```

- Seed database
```sh
$ php artisan db:seed
```


- Start server localhost:8000
```sh
php artisan serve
```


- Clear cache
```sh
php artisan cache:clear && php artisan view:clear &&  php artisan config:cache
```


- Route list
```sh
$ php artisan route:list
```

- Reload class
```shell
$ composer dump-autoload
```