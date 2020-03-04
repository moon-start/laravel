<?php

namespace App\Http\Middleware;

use Closure;


### 使用者 auth
use Illuminate\Support\Facades\Auth;

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


    ## 使用者 認證
   

    ##,$A,$name
    public function handle($request, Closure $next,$name)
    {
        # 只允許請求內的 age 變數大於 200 的才能存取路由，
        # 否則，我們會將用戶重新導向「home」這個 URI。
        // if ($request->input('age') <= 200) {
        //     return redirect('QB'); 
        // }
        // return $next($request);
        #return redirect('QB'); 重島次數過多
        #return route('home');
        

        ### 判斷是否  已登入
        if (Auth::check()) {

            # 取得目前的已認證使用者...
            $user = Auth::user();
            # 取得目前的已認證使用者 ID...
            $id = Auth::id();

            ## 輸出 變數或成員
            ## 字符串（2）“ QQ”
            var_dump($user->name);

            # 使用特定使用者的 ID 登入
            # $user_id = '1';
            # Auth::loginUsingId($user_id);
            # 登出
            #Auth::logout();
        } else {
            echo "沒有使用者";
        }
        



        ## 檢查 參數
        ## 全域..如果添加.....會爆參數錯誤  ....因為她也..呼叫一次 但沒傳參數
        // if (! $request->user()->hasRole($name)) {
        //     $request->user() 資料庫物件??
        //     echo $name;
        // }
        ## 參數
        echo $name;



        #### 參數 --> QBxxx.php 先 -->  web.php 後 
        ################## QAQ123in Route
        echo "123";
        #echo $A.', ';
        #echo $name.'</br>';
        return $next($request);  ## 處理 web.php 函數


        #### 參數  -->  web.php 先 --> QBxxx.php 後
        ################### QAQin Route 123
        // $response = $next($request); //先處理 request （next 本身是閉包，會先處理 request)
        // echo '</br>'.'123';
        // return $response;
    }


    ## 全域
    ## 加入到 app/Http/Kernel.php 的 $middleware 屬性清單列表中。
}
