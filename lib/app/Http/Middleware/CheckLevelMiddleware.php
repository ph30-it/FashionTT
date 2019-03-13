<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckLevelMiddleware
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
        if(Auth::check()&&Auth::user()->role_id==1){
            // Nếu đã chứng thực và level ==1 (là admin)
            return redirect()->route('category-list');
        }
        elseif(Auth::check()&&Auth::user()->role_id==2){
            return redirect()->route('user');
        }
        else{
            return $next($request);
            // Nếu không phải chuyển hướng về trang chủ
        }
    }
}
