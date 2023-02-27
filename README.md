# REST API Category Manager
## Autor Michał Strzygowski

Wtyczka REST API Category Manager zapewnia możliwość zarządzania Kategoriami w jezykach PL / EN / DE / FR poprzez wysyłanie żądania REST/HTTP do serwera.

## REST Endpoints

GET|HEAD        api/{lang}/categories  
GET|HEAD        api/{lang}/categories/{id}
POST            api/categories
PUT|PATCH       api/categories/{id} 
DELETE          api/categories/{id} 

{lang} - jezyk w jakim chcemy otrzymać dane (pl, en, de, fr)
{id} - id kategorii


## Installation

Po rozpakowaniu projektu wykonaj komend z lini komend:
cd example-app
docker-compose up
docker-compose exec laravel.test composer install
./vendor/bin/sail php artisan migrate:install 
./vendor/bin/sail php artisan migrate --seed

