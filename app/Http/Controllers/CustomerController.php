<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//加入 EditCustomer
use App\Http\Request\EditCustomer;

## 連接資料表
use App\CustomerEloquent;

class CustomerController extends Controller
{


  //編寫 update function
  public function update($Cusid, EditCustomer $request){
  //改寫後，就輕快多了！
  $customer = CustomerEloquent::where('Cusid', $Cusid)->firstOrFail();
  $customer->Phone = $request->Phone;
  $customer->save();

  return View::make('edit',[
    'customer' => $customer,
    'msg' => '修改成功'
  ]);
}
}
