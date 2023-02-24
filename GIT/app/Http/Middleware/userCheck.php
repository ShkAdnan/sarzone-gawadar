<?php

namespace App\Http\Middleware;

use Closure;

class userCheck
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
        $id = session('LoggedIn');
        if(isset($id) ){
            return $next($request); 
        }
        return redirect('/');
    }
}
