<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerEloquent extends Model
{
  //定義相關連結的資料表
  //如果有依照命名規則，此行程式不必撰寫
  protected $table = 'customers';
  
  //定義主鍵的欄位
  //如果有依照命名規則，此行程式不必撰寫
  protected $primarykey = 'id';
  
  //如果沒有設定 created_at 與 updated_at欄位，則可以設成 false
  public $timestamps = true;
}
