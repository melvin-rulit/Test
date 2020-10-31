<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Illuminate\Http\Request;

// Класс посредник в запросе

class CheckAge
{
    /**
     * Обрабатывать входящий запрос.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->age <= 200) {
            return redirect('/');
          }


        return $next($request);
    }
}
