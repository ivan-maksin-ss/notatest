docker-compose up -d

docker-compose run composer install

cp code/.env.example code/.env

docker-compose fpm php artisan migrate:fresh

docker-compose fpm php artisan db:seed


go to 
http://localhost:82/clients/2
