@extends('layouts.app')

@section('title', 'Мой первый проект на Laravel')

@section('content')
    <div class="wrap hero">
        <div class="badge"><span class="dot"></span> Практическая работа · Laravel 12</div>
        <h1>Привет! Это мой первый проект на <span>Laravel</span>.</h1>
        <p class="lead">
            Я создал его через Composer, запустил встроенный сервер и изменил приветственную
            страницу. Ниже — версии окружения и то, как в проекте связаны маршруты,
            контроллеры и представления.
        </p>
        <div class="actions">
            <a class="btn btn-primary" href="/about">Как устроен проект →</a>
            <a class="btn btn-ghost" href="https://laravel.com/docs" target="_blank" rel="noopener">Документация Laravel</a>
        </div>
    </div>

    <div class="wrap stats">
        <div class="stat"><b>Laravel {{ app()->version() }}</b><span>PHP-фреймворк</span></div>
        <div class="stat"><b>PHP {{ PHP_VERSION }}</b><span>Версия интерпретатора</span></div>
        <div class="stat"><b>Composer 2</b><span>Менеджер зависимостей</span></div>
    </div>

    <section class="wrap">
        <h2 class="section-title">Три ключевых места проекта</h2>
        <p class="section-sub">Именно их нужно показать преподавателю по заданию.</p>
        <div class="grid">
            <div class="card">
                <div class="icon">🧭</div>
                <h3>Маршруты</h3>
                <p><code>routes/web.php</code> — какой URL каким кодом обрабатывается. Здесь объявлены главная страница и страница «О проекте».</p>
            </div>
            <div class="card">
                <div class="icon">⚙️</div>
                <h3>Контроллеры</h3>
                <p><code>app/Http/Controllers</code> — классы, которые принимают запрос и возвращают ответ. Добавлен <code>PageController</code>.</p>
            </div>
            <div class="card">
                <div class="icon">🎨</div>
                <h3>Представления</h3>
                <p><code>resources/views</code> — Blade-шаблоны. Файл <code>welcome.blade.php</code> содержит этот текст.</p>
            </div>
        </div>
    </section>

    <section class="wrap">
        <h2 class="section-title">Как запрос проходит через приложение</h2>
        <p class="section-sub">Паттерн MVC: маршрут → контроллер → представление → HTML в браузере.</p>
        <div class="chain">
            <div class="chain-item">
                <small>Шаг 1</small>
                <b>Маршрут</b>
                <span><code>Route::get('/', ...)</code> в <code>routes/web.php</code></span>
            </div>
            <div class="arrow">→</div>
            <div class="chain-item">
                <small>Шаг 2</small>
                <b>Контроллер</b>
                <span><code>PageController@about</code> для страницы «О проекте»</span>
            </div>
            <div class="arrow">→</div>
            <div class="chain-item">
                <small>Шаг 3</small>
                <b>Представление</b>
                <span><code>welcome.blade.php</code> и <code>about.blade.php</code></span>
            </div>
        </div>
    </section>
@endsection
