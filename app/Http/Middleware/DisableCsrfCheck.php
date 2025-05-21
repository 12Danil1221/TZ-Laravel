<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableCsrfCheck
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('registration')) { // Проверяем маршрут
            return $next($request); // Не применяем CSRF защиту
        }

        return app('Illuminate\Contracts\Foundation\Application')->handle($request); // Применяем стандартную обработку
    }
}