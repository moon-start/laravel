<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

### 進行軟刪除
use Illuminate\Database\Eloquent\SoftDeletes;


class QQ extends Model
{
  ### 軟刪除
  #use SoftDeletes;
  ## 指定要  連結的資料表
  protected $table = 'customers'; 
  


  ## 預設 primaryKey 為 id，如果不是的話需要另外設定
  protected $primarykey = 'id';
  
  //如果沒有設定 created_at 與 updated_at欄位，則可以設成 false
  public $timestamps = true;

  

    #############
    // // 關閉 timestamps 控制（預設為開啟）
    // public $timestamps = false;

    // // 將時間格式改成 Seconds since the Unix Epoch
    // protected $dateFormat = 'U';

  ### 軟刪除
  #protected $dates = ['deleted_at'];
}
