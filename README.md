## Installation

```sh
$ composer install
$ npm install
$ cp .env.example .env
```

Create new Database, and insert db data in .env file as follow:

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=your_user
DB_PASSWORD=your_password

```

Generate your key:

```sh
$ php artisan key:generate
```

Run the migrations

```sh
$ php artisan migrate
```
