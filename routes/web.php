<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Главная страница возвращает представление welcome.blade.php,
| а страница /about обрабатывается контроллером PageController.
|
*/

Route::get('/', function () {
    return view('welcome'); // resources/views/welcome.blade.php
});

Route::get('/about', [PageController::class, 'about'])->name('about');
