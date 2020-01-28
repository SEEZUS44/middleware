<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
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
        // redirect()->back()
        return redirect('/');
        //this will take the user back. If this is not predecated by return then it will show 'Middleware Role' as per the route.

        return $next($request);
    }
}
