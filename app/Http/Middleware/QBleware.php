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


    ##,$A,$name
    public function handle($request, Closure $next)
    {
        # 只允許請求內的 age 變數大於 200 的才能存取路由，
        # 否則，我們會將用戶重新導向「home」這個 URI。
        // if ($request->input('age') <= 200) {
        //     return redirect('QB'); 
        // }



        // return $next($request);

        #return redirect('QB'); 重島次數過多
        #return route('home');

        echo "123";
        #echo $A.', ';
        #echo $name.'</br>';
        return $next($request);
    }


    ## 全域
    ## 加入到 app/Http/Kernel.php 的 $middleware 屬性清單列表中。
}
