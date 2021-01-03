<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CekUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$user)
    {
        if(in_array($request->users()->id, $user)){
            return $next($request);
        }
        return redirect('/');
    }
    
}
