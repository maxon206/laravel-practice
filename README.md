# Laravel Practice — практическая работа

Учебный проект по теме **«Установка Laravel через Composer и структура проекта»**.

В проекте создано приложение Laravel 12, запущен встроенный сервер, изменена
приветственная страница и добавлена страница, которая открывается через контроллер.
Репозиторий также содержит отчёт **`REPORT.docx`** со скриншотами.

- **Репозиторий:** https://github.com/maxon206/laravel-practice
- **Отчёт:** [REPORT.docx](REPORT.docx)

## Что сделано

| Пункт задания | Где посмотреть |
|---|---|
| Проект создан через Composer | `composer.json`, `composer.lock` |
| Сервер запущен через `php artisan serve` | скриншот в `REPORT.docx` |
| Приветственная страница изменена | `resources/views/welcome.blade.php` |
| Маршруты | `routes/web.php` |
| Контроллеры | `app/Http/Controllers/PageController.php` |
| Представления | `resources/views/` |

## Стек

- PHP 8.3
- Laravel 12.74
- Composer 2.11
- SQLite (база по умолчанию)
- Blade, CSS (без сборки фронтенда)

## Запуск

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Сайт откроется по адресу **http://127.0.0.1:8000**.

Страницы:

- `/` — главная, приветственная страница;
- `/about` — страница «О проекте», открывается через `PageController`.

## Структура

```text
app/
├── Http/
│   └── Controllers/
│       ├── Controller.php       # базовый контроллер
│       └── PageController.php   # контроллер страницы «О проекте»
└── Models/
resources/
└── views/
    ├── layouts/
    │   └── app.blade.php        # общий макет
    ├── welcome.blade.php        # главная страница
    └── about.blade.php          # страница «О проекте»
routes/
└── web.php                      # маршруты приложения
database/
└── migrations/                  # миграции БД
public/
└── index.php                    # точка входа
```

## Маршруты

```php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PageController::class, 'about'])->name('about');
```

## Скриншоты

Все скриншоты находятся в папке [`docs/screenshots`](docs/screenshots) и вставлены
в отчёт `REPORT.docx`.

## Автор

Макаров А., 2026.
