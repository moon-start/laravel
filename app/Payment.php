<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Invoice;

class Payment extends Model
{
    public function invoice()
    {
        ### 和 Payment 做一對一關聯
        ### 一對一的連接欄位
        return $this->hasOne('App\Invoice','Payment_id','Payment_ID');

        
        ##  使用方式
        //   //利用下列程式碼呼叫對應的客戶資料
        //   $customer = App\Payment::find(1)->invoice;
        //   //取得客戶電話
        //   $customer = App\Payment::find(1)->invoice->隨便一個欄位;
  
    }

    protected $table = 'paymentppp'; 
    protected $primarykey = 'id';
    public $timestamps = true;
}
