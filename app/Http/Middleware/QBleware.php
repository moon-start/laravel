<?php

namespace App\Http\Middleware;

use Closure;

class QBleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    #public function handle($request, Closure $next)
    #{
    #    return $next($request);
    #}


    public function handle($request, Closure $next)
    {
        # 只允許請求內的 age 變數大於 200 的才能存取路由，
        # 否則，我們會將用戶重新導向「home」這個 URI。
        if ($request->input('age') <= 200) {
            return redirect('home');
        }

        return $next($request);
    }

}
