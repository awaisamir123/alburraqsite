<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminsMiddleware
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
    	if(Auth::user()->role !=2 ){
    		
		    Session::flash('message', 'Permission Denied!');
		    Session::flash('alert-class', 'alert-warning');
		
		    return redirect(route('home'));
	    }
        return $next($request);
    }
}
