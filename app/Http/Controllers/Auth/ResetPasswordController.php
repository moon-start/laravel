<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
    * Where to redirect users after resetting their password.
    * 引導使用者在修改好密碼時，導到相關的網址
    * @var string
    */
    protected $redirectTo = RouteServiceProvider::HOME;

    //以下自行加入
    //沒登入的使用者，才可以進行密碼忘記的處理
    public function __construct(){
        $this->middleware('guest');
    }
}
