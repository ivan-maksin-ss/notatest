Тестовое задание Nota
=====================
Задание 1
---------
>На Laravel 5.6 реализовать контроллер->сервис->репозиторий->модель для получения списка всех записей из модели и отдачи их в виде json. Нужна пагинация. Покрыть код юнит-тестами.


Решение
-------
Для разворачивания проекта выполнить в консоли в корневой папке задания следующие команды:


```bash
docker-compose up -d
```

```bash
docker-compose run composer install
```

```bash
cp code/.env.example code/.env
```

```bash
docker-compose fpm php artisan migrate:fresh
```

```bash
docker-compose fpm php artisan db:seed
```

go to http://localhost:82/clients/2
