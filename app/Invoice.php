<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


### 新增(關聯用)
use App\Item;

class Invoice extends Model
{
  public function itemOf()
  {
    ### 和 Payment 做一對多關聯  
    ### 一(Invoice)對多(payment)
    ### 一對多的連接
    // return $this->hasMany('App\Item','Invoice_id','Invoice_ID');
    // return $this->hasMany('App\Item','id','Invoice_ID');  //錯誤的
    return $this->hasMany('App\Item','Invoice_ID');

    ## 使用A
    // $cars = App\Invoice::find(1)->item;
    // foreach ($cars as $car){
    //     $car->carno;
    // }

    ## 使用B
    ## ->first() 表示取 第一筆紀錄
    // $carno = App\Invoice::find(1)->Item()->first()->carno;
    // $carno = App\Invoice::find(1)->Item()->where('title', 'foo')->first()->隨便一個欄位;
  }

 

  protected $table = 'invoiceppp'; 
  ## 預設 primaryKey 為 id，如果不是的話需要另外設定
  protected $primarykey = 'id';
  //如果沒有設定 created_at 與 updated_at欄位，則可以設成 false
  public $timestamps = true;
}
