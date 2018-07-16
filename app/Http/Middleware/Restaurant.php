<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Restaurant
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
	    if (!Auth::user()->restaurant){
		    //Session::flash('info',"You do not have permissions to perform this actions");

		    return redirect('/');
	    }

        return $next($request);
    }
}
