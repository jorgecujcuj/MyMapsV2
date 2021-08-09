<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->fullacces=='yes'):
            return $next($request);//nos dirige a la vista del admin - home
        elseif(Auth::user()->fullacces=='no'):
            return redirect('user');//nos dirige a la ruta user - user 
        endif; 
    }
}
