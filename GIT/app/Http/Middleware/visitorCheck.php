<?php

namespace App\Http\Middleware;

use App\Models\notice;
use Closure;
use Illuminate\Http\Request;
use DB;
class visitorCheck
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
        $notices=notice::where('notice_online','true')->get();
        view()->share('notices', $notices);
        if($request->hasCookie('visited')) {
            
            DB::table('visitors')->latest('id')->increment('totalVisitors');
            return $next($request);
            
        }
        else{
            
            DB::table('visitors')->latest('id')->increment('uniqueVisitors');
            DB::table('visitors')->latest('id')->increment('totalVisitors');
            $response = $next($request);
            return $response->withCookie(cookie('visited', 'yes', (60*60*24*7) ) );
            
        }
    }
}
