INSTALLATION

$ composer install
$ npm install
$ cp .env.example .env

DATABASE
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=your_user
DB_PASSWORD=your_password

KEY
$ php artisan key:generate

MIGRATIONS
$ php artisan migrate
