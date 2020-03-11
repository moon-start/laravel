<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /**
    * Where to redirect users after login.
    * 登入後，導向何處
    * @var string
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * 登入後，導向何處
     * @var string
     */

    ################################################### 登出的位置 app
    ## 'App \ Providers \ RouteServiceProvider :: HOME'
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     * 使用 guest 中介層，登出時，則是使用 logout
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
