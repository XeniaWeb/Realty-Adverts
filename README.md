## Oksana Bürki

<https://xeniaweb.art>

### About this project

XeniaWeb Realty Adverts App  - Laravel 11 Vite InertiaJs Vue3.js Tailwind
##
Установить [Laravel Herd](https://herd.laravel.com/) для запуска окружения (PHP, Nginx)
и [Docker](https://www.docker.com/products/docker-desktop/) для базы данных 
### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Docker (for MySQL DB)
#### Start db container
```sh
docker compose up -d
```

#### Stop containers
```sh
docker compose down
```

### Frontend
```sh
npm install
```
```sh
npm run build
```

```sh
npm run dev
```

#### Refresh Database
```sh
php artisan migrate:fresh --force --seed
```
#### Refresh Database fake data
```sh
php artisan db:seed --force
```
