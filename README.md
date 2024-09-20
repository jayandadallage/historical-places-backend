First, clone the repository to your local machine:
```bash
git clone <repository-url>
cd <repository-name>

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan db:seed

php artisan serve
