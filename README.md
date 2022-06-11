
## Installation
1. Clone this project or download this project
2. Run composer install in terminal
   ```bash
    composer install
    ```
3. Set up Laravel configurations
    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. Set your database in .env edit this line
   ```bash
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Migrate database
    ```bash
    php artisan migrate
    ```

6. Serve the application
    ```bash
    php artisan serve
    ```
