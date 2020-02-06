<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


## 加上
use Route;
use View;

## 加入 KKRequest 檔案
use App\Http\Request\KKRequest;

class KKController extends Controller
{
    ## 加上
    public function index(){
      
      ##return View::make('board');
      $validator = Validator::make(
      $request->all(),[
        'Name' => 'required|string',
        'Phone' => 'required|string'
      ],[
        'required' => '不可為空白',
        'required' => '須為字串'
      ]
      );


      // 判斷方式
      if ($validator->fail()){
        return redirect()->back()->withErrors($validator);
      } else {
        $customer = CustomerEloquent::where('Cusid',$cusid)->firstOrFail();
        $customer->Phone = $request->Phone;
        $customer->save();

        return View::make('edit',[
          'customer' => $customer,
          'msg' => '修改成功'
        ]);
      }

    }

  ###### 更新 資料庫
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
