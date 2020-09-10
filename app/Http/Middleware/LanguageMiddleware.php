<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('language')) {
            app()->setlocale(Session::get('language'));
        }
        return $next($request);
    }
}
