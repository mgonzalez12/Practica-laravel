<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckRoles
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
         $roles = array_slice(func_get_args(),2);  // saca los dos primeros
       
        //dd($roles);
      
            if (! $request->user()->hasRoles($roles)) {
                return $next($request);
            }
      

        
        
        return redirect('/');
    }

}
