<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckAdmin
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
        return $next($request);
    }
    else{
        return redirect()->route('login');
           // Nếu không phải chuyển hướng về trang chủ
    }
}
}
