<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class customers extends Model
{
    ## 指定要  連結的資料表
    protected $table = 'customers'; 
  


    ## 預設 primaryKey 為 id，如果不是的話需要另外設定
    protected $primarykey = 'id';

    ## 如果沒有設定 created_at 與 updated_at欄位，則可以設成 false
    ## public $timestamps = true;
    public $timestamps = false;

  
}
