cp .env.example .env

docker compose up --build

docker compose exec app php artisan migrate
