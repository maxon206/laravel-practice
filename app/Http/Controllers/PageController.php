<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Страница «О проекте».
     * Маршрут /about передаёт запрос этому методу,
     * а метод возвращает Blade-представление resources/views/about.blade.php.
     */
    public function about()
    {
        return view('about');
    }
}
