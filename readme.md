# Sximo

## Instruction

-   Clone the Repository

    ```
    git clone https://github.com/saadh393/sximo.git
    ```

-   Import the [database.6.2.sql](https://github.com/saadh393/sximo/releases/tag/database)

-   Install Composer Dependencies

    ```
    composer install
    ```

-   Install NPM Dependencies (Optional)
    ```
    npm install
    ```
-   Generate an app encryption key

    ```
    php artisan key:generate
    ```

-   In the .env file, add database information to allow Laravel to connect to the database

-   Migrate the database

    ```
    php artisan migrate
    ```

-   Run the Application

    ```
    php artisan serve
    ```

-   Login with the Credentials
    ```
    dummyemail@email.com
    123@@123
    ```
