# native-mvc
PHP Native MVC (Model-View-Controller) with composer dependencies.

## How To Use
* Clone this repo
* Install composer 
* Running composer install
  ```
  composer install
  ```
* Copy & modified configuration
  ```
  cp .env.example .env
  ```

## Database Configuration
Modified your .env file with your database configuration
```
APP_DRIVER           = "mysql"
APP_HOST             = "127.0.0.1"
APP_DATABASE         = "your-database"
APP_USERNAME         = "root"
APP_PASSWORD         = "your-password"
APP_CHARSET          = "utf8"
APP_COLLATION        = "utf8_unicode_ci"
```
