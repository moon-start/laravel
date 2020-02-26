<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use App\Invoice;

class Payment extends Model
{


    protected $table = 'payment'; 
    ### 注意ID是否有改 否則這行修改
    protected $primarykey = 'id';
    public $timestamps = true;



    public function invoice()
    {
        ### 和 Payment 做一對一關聯
        ### 一對一的連接欄位
        // return $this->hasOne('App\Invoice','Payment_id','Payment_ID');
        // return $this->hasOne('App\Invoice','id','Payment_ID');


        ######  Invoice ~Payment_ID  對  Payment ~id
        // return $this->hasOne('App\Invoice','Payment_ID');
        return $this->hasOne(Invoice::class,'Payment_ID');

        
        ##  使用方式
        //   //利用下列程式碼呼叫對應的客戶資料
        //   $customer = App\Payment::find(1)->invoice;
        //   //取得客戶電話
        //   $customer = App\Payment::find(1)->invoice->隨便一個欄位;
  
    }
}
