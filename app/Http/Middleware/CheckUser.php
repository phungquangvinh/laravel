<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class CheckUser
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
        //return $next($request);
        // Auth::user()->hasRole('AdminTractor');
        if(Auth::check()){
            if((Auth::user()->role_id == 1) || (Auth::user()->role_id == 2)){
                return $next($request);
            }else{
                return redirect('home');
            }
        }else{
            return redirect('login');
        }
        
        //dd($user);
        //return $next($request);
    }
}
