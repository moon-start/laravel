<?php
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
  use Notifiable;
  /**
  * The attributes that are mass assignable.
  * 可大量寫入資料的欄位
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password',
  ];
  /**
  * The attributes that should be hidden for arrays.
  * 會被隱藏的欄位
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];
  /**
  * The attributes that should be cast to native types.
  * 保留原始資料型態的欄位
  * @var array
  */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];
}