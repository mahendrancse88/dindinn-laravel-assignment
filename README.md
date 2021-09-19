How to run application
Install Composer Dependencies by command composer install
Copy .env.example to .env by command cp .env.example .env
Edit .env file
Edit database name, usernrame and password
Change QUEUE_CONNECTION from sync to database
Generate Key by command php artisan key:generate
Run migration by command php artisan migrate
Run dbseed by command php artisan db:seed
Run application by command php artisan serve