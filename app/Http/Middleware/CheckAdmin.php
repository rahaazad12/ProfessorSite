<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if (!\Auth::check() || \Auth::user()->email != 'shspanol12@gmail.com')
            return redirect('/')->withErrors("Forbidden");
        return $next($request);
    }
}
