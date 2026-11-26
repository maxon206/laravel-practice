@extends('layouts.app')

@section('title', 'О проекте — Laravel Practice')

@section('content')
    <div class="wrap hero">
        <div class="badge"><span class="dot"></span> Страница контроллера</div>
        <h1>О проекте</h1>
        <p class="lead">
            Эта страница открывается не напрямую из <code>routes/web.php</code>, а через
            контроллер <code>PageController</code>. Так видно полную цепочку MVC:
            маршрут передаёт запрос контроллеру, а тот возвращает Blade-представление.
        </p>
    </div>

    <section class="wrap">
        <div class="grid-2">
            <div class="card">
                <div class="icon">🧭</div>
                <h3>Маршрут</h3>
                <p><code>Route::get('/about', [PageController::class, 'about'])</code></p>
                <p>Файл <code>routes/web.php</code>. Маршрут связывает адрес <code>/about</code> с методом контроллера.</p>
            </div>
            <div class="card">
                <div class="icon">⚙️</div>
                <h3>Контроллер</h3>
                <p><code>app/Http/Controllers/PageController.php</code></p>
                <p>Метод <code>about()</code> возвращает <code>view('about')</code> — представление с этой страницей.</p>
            </div>
        </div>
    </section>

    <section class="wrap">
        <h2 class="section-title">Структура проекта</h2>
        <p class="section-sub">Основные каталоги свежего Laravel-приложения.</p>
        <div class="panel">
            <table>
                <thead>
                <tr>
                    <th>Путь</th>
                    <th>Назначение</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><code>routes/web.php</code></td>
                    <td>Маршруты: какой URL каким кодом обрабатывается.</td>
                </tr>
                <tr>
                    <td><code>app/Http/Controllers</code></td>
                    <td>Контроллеры, обрабатывающие запросы.</td>
                </tr>
                <tr>
                    <td><code>resources/views</code></td>
                    <td>Blade-шаблоны — HTML-представления страниц.</td>
                </tr>
                <tr>
                    <td><code>app/Models</code></td>
                    <td>Модели Eloquent для работы с базой данных.</td>
                </tr>
                <tr>
                    <td><code>database/migrations</code></td>
                    <td>Миграции — версионирование структуры БД.</td>
                </tr>
                <tr>
                    <td><code>public/index.php</code></td>
                    <td>Единственная точка входа, видимая веб-серверу.</td>
                </tr>
                <tr>
                    <td><code>.env</code></td>
                    <td>Настройки окружения: подключение к БД, ключ приложения.</td>
                </tr>
                <tr>
                    <td><code>artisan</code></td>
                    <td>Консольная утилита: <code>serve</code>, <code>make:controller</code>, <code>migrate</code> и другие.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="wrap">
        <h2 class="section-title">Что сделано в практической работе</h2>
        <div class="grid-2">
            <div class="card">
                <ul class="clean">
                    <li>Проект создан командой <code>composer create-project</code></li>
                    <li>Сервер запущен через <code>php artisan serve</code></li>
                    <li>Приветственная страница изменена в <code>welcome.blade.php</code></li>
                </ul>
            </div>
            <div class="card">
                <ul class="clean">
                    <li>Показаны маршруты в <code>routes/web.php</code></li>
                    <li>Показана папка контроллеров и класс <code>PageController</code></li>
                    <li>Показана папка представлений и общий макет <code>layouts/app.blade.php</code></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="wrap">
        <div class="note">
            <b>Ссылка на репозиторий:</b>
            <a href="https://github.com/maxon206/laravel-practice" target="_blank" rel="noopener">github.com/maxon206/laravel-practice</a>.
            Проект опубликован в открытом репозитории вместе с отчётом <code>REPORT.docx</code>.
        </div>
    </section>
@endsection
