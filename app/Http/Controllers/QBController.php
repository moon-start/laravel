<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

## 資料庫
use Route;
use View;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// 或抽像類擴展的類。
use Illuminate\Foundation\Http\FormRequest;
## 多了這行? 這好像是語法自動新增..
use Illuminate\Database\QueryException;
// use Illuminate\Support\Facades\Validator;
use Validator,Input,Redirect; 
// use 

use App\QQ;
use App\Payment;
use App\Invoice;
use App\Item;


## 使用 日期函數
use Carbon\Carbon;



class QBController extends Controller
{
    

    public function index()
    {
        $RR = 'QQP';

   

        $customers = Invoice::all();  
        

        ### A
        // $AA = Payment::find(1)->invoiceOf->location;
        ### B 
        $BB = Invoice::find(1)->paymentOf->points;
     


        return View::make('board',['customers' => $customers]);
        # 多個參數(boardOK.blade.php)
        # return view('board', compact(['customers', 'cusid' ,'RR' ]));

     
    }

    


    ##### URL::192.168.1.1/new
    ## 新增客戶資料
    ##################################### public function new(Request $request){
    public function new(){
      //$customers = Customer::all();
      //return View::make('new',['customers' => $customers]);

      ### <?php echo $_GET['Cusid'];
      ### web.php 設定是get傳送 
      ### $全部紀錄 = QQ::all(); 
      # 第一筆
      # $CC = QQ::orderBy('Cusid','asc')->first();

      # 最後一筆(是一個QQ類別)
    //   $SS = QQ::orderBy('Cusid','desc')->first();

      ## payment 資料表
      ## 當前 日期時間
      ## $SS = Payment::orderBy('id','desc')->first();

      ### 時間
      ## $DD = date(' Ym-d', time());
      date_default_timezone_set("Asia/Taipei");
      $DD = date('Y-m-d H:i:s');
      
    //   $CC = (int)$SS;
    //   $AA = (string)$CC;
      return View::make('new',['DD'=>$DD]);  ### URL沒有顯示??
    }
 
    // antallen@gmail.com


  
    ## new 畫面
    ## 將新客戶資料寫入資料庫
    public function storeABC(Request $request){
        ### 取消時..的返回頁面
        ### <input type="submit" class="btn btn-warning" value="取消" name="cancel">
        ### $request->cancel .... 取布林?
        if ($request->cancel){

            // $customers = QQ::all();
            // return View::make('board',['customers' => $customers]);
            
            $customers = Invoice::all();    
            return View::make('board',['customers' => $customers]);
        }

        ## 傳入 make 方法的第一個參數是待驗證的資料，第二個參數是資料的驗證規則。
        $validator = Validator::make(
            $request->all(),[
                'payment' => 'required|string',
                'points' => 'required|string'
            ],[
                'required' => '不可為空白',
                'required' => '須為字串'
            ]
        );

      
        ### 判斷方式
        if ($validator->fails())
        {
            // https://laravel.tw/docs/5.0/validation
        
            ## 回傳根據前一個URL的重導 return redirect()->back()
            ## 取得錯誤訊息並回傳到視圖中 ->withErrors($validator);
            return redirect()->back()->withErrors($validator);

            ## 返回上一个页面，注意避免死循环
            ## redirect()->back();

        } else {
            ## 新增  一筆紀錄
            $customers = new Payment;
            $customers->id=null;
            $customers->date=$request->input('date');

            // $DDA=Carbon::now();
            // $customers->date=Carbon::now();
            ## ("2020-02-27 07:30:57");
            $customers->payment=$request->input('payment');
            $customers->points=$request->input('points');   ### 必須int整數
            $customers->save();

            ## 新增  一筆紀錄
            $customers = new Invoice;
            $customers->id=null;
            $customers->Invoice=$request->input('Invoice');
            $customers->location=$request->input('location');
            $customers->Payment_ID=Payment::orderBy('id','desc')->first()->id;
            $customers->save();


            ## 導向URL:: http://192.168.1.1/QQ 頁面
            return redirect('QB');
        }
    }


## 修改客戶資料表格
    ## board.blade.php <a href="{{ action('QQController@edit',[...]) 傳進來參數
    public function edit(Request $request){
   
        ## Route::get('...','...@edit'); ## get參數
        return View::make('edit',['Cusid'=>$request->Cusid,'Name'=>$request->Name,'Address'=>$request->Address,'Phone'=>$request->Phone]);
    }

    ## 更新客戶資料
    public function update(Request $request){
        ## 
        if ($request->cancel){
            $customers = QQ::all();
            return View::make('board',['customers' => $customers]);
        } 

        $customers = QQ::where('Cusid',$request->input('oldId'))
                                    ->update(['Cusid'=> $request->input('Cusid'),
                                    'Name'=> $request->input('Name'),
                                    'Address'=> $request->input('Address'),
                                    'Phone'=> $request->input('Phone')
        ]);
        ### 傳入 Cusid
        $customers = QQ::all();
        return View::make('board',['customers' => $customers]); 
    }


    ## 刪除客戶資料
    public function delete(Request $request){
        ## 刪除
        QQ::where('Cusid',$request->input('Cusid'))->delete();

        ## 重新取出列表
        $customers = QQ::all();
        return View::make('board',['customers' => $customers]); 
    }

}
