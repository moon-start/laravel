<?php

namespace App\Http\Controllers;



## 附加新增 --model
## 或者單獨 php artisan make:model Customer 
## 建議是一個 資料表名稱
use App\QQ;
// use App\customers;
use App\Payment;
use App\Invoice;
use App\Item;

use App\CustomerEloquent;


## 多了這行? 這好像是語法自動新增..
// use Illuminate\Database\QueryException;
// use Illuminate\Support\Facades\Validator;
use Validator,Input,Redirect; 
// use 


// use Illuminate\Http\Request;
// 或抽像類擴展的類。
// use Illuminate\Foundation\Http\FormRequest;


### index(Request $request)
### $request->all() ....?
use Illuminate\Http\Request;
## 新增兩行 (一-二-三行 都用到)
use Route;
use View;
## 新增資料庫用-問號2?
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


### update()
use App\Http\Request\KKRequest;
use App\Http\Request\EditCustomer;



class QQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ## 專案/resources/views (等於) View::make

        // ## 第一個
        // ##  專案/resources/views/board.blade.php
        // ## ############ make('board');
        // ## return View::make('board');

        // ## 第二個 ## from 資料表名稱
        // // $SS = DB::select('select * from Invoice');
        // // // 可綁定參數
        // // // $customers = DB::select('select * from customers where Name = :names', ['names' => "Peter"]);
        // // ## ######### make('SQL'); ## SQL.blade.php
        // // return View::make('SQL',['Invoice' => $SS]);


        // ## 第三個
        // $customers = QQ::all();  //->isEmpty();
        
        // // if( $customers ){
        // //   ## 只能執行一次 不然資料會重複的錯誤
        // //   ## 新增一筆資料 ## 因為欄位(不可以空值)
          
        // // } else{   }
        

        // ###### 寫入一筆資料
        // // $post = new QQ;
        // // $post->id = 1;
        // // $post->Cusid = '1';
        // // $post->Name = 'PeterXP';
        // // $post->Address = '1234';
        // // $post->Phone = '0955';
        // // $post->save();

        
       

        // ####### 取出資料表 第一筆資料 ##### 修改
        // $post = QQ::find(1);
        // // $post->Name = 'James';
        // $post->Name = 'PeterXP';
        // #$post->Phone = '0912345678';
        // $post->save();



        


        // ## 軟刪除
        // #$post = QQ::withTrashed()->get();
        // // // 確認是否經刪除
        // // if ($flight->trashed()) {
        // //   //
        // // }



        // // ## A(多個參數)
        // // ## 追加的SQL語法
        // $customers = QQ::where('Name', '=', 'PeterXP') // 取 Name 為 Peter 
        // ->orderBy('Name', 'desc') // 根據price由高到低排列
        // ->take(10) // 只取前10筆資料
        // ->get();
        // # $cusid = '1';
        // // // $Cusid = QQ::where('Cusid', '=', '1')->get(); // 取 Name 為 Peter 
        
        // // #### 原始
        // // // ###### 傳送一個參數  POST 只1參數customers
        // // return View::make('board',['customers' => $customers]);
        // // $data = ['name' => 'ray','age' => 25];
        // // $title = '自我介紹';
        // $cusid = QQ::find(1);  ##### QQ::find(1)->invoice->Shop_name

        $RR = 'QQP';

        # 客戶列表 # 取出紀錄
        $customers = QQ::all(); 
        return View::make('board',['customers' => $customers]);
        # 多個參數(boardOK.blade.php)
        # return view('board', compact(['customers', 'cusid' ,'RR' ]));


        // return View::make('board',['Cusid' => $Cusud]);


        // ### B
        // // $customer = Payment::find(1);
        // ### 呼叫 invoice() 這是一對一關聯的方法物件
        // //get 付款方式...............->定義的方法->欄位
        // $customer = Payment::find(1)->invoiceOf->Shop_name;
        // // $post->first()->user()->get() ...????
        // ## B
        // // return View::make('boardB',['name' => "123"]);
        // return View::make('boardB',['name' => $customer]);
       
        
        //## C
        // ##### 在boardC.php  定義一個 $id
        // return View::make('boardC',['id' => "123"]);

     
    }

    ### 導向 http://192.168.1.1/user
    // {{ route('user',['id' => 'XP' ]) }}"


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('post.create');
    }


    ##### URL::192.168.1.1/new
    ## 新增客戶資料
    public function new(Request $request){
      //$customers = Customer::all();
      //return View::make('new',['customers' => $customers]);

      ### <?php echo $_GET['Cusid'];
      ### web.php 設定是get傳送 
      ### $全部紀錄 = QQ::all(); 
      # 第一筆
      # $CC = QQ::orderBy('Cusid','asc')->first();
      # 最後一筆
      $SS = QQ::orderBy('Cusid','desc')->first();
      $CC = (int)$SS+1;
      $AA = (string)$CC;
      return View::make('new',['Cusid'=>$AA]);  ### URL沒有顯示??
    }
 



    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //   $validatedData = $request->validate([
    //     'title' => 'required|unique:posts|max:255',
    //     'body' => 'required',
    //   ]);

    // }

    ## new 畫面
    ## 將新客戶資料寫入資料庫
    public function storeABC(Request $request){
        ### 取消時..的返回頁面
        ### <input type="submit" class="btn btn-warning" value="取消" name="cancel">
        ### $request->cancel .... 取布林?
        if ($request->cancel){
            $customers = QQ::all();
            return View::make('board',['customers' => $customers]);
        }

        ## 新增  一筆紀錄
        ## <input type="text"class="form-control" id="Cusid" name="Cusid" value="">
        ## $request->input('Cusid');....取內容
        $customers = new QQ;
        ## 這是一個新的SQL      ## new QQ;
        $customers->Cusid=$request->input('Cusid');
        $customers->Name=$request->input('Name');
        $customers->Address=$request->input('Address');
        $customers->Phone=$request->input('Phone');
        $customers->save();
        ## 導向URL:: http://192.168.1.1/QQ 頁面
        return redirect('QQ');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */
    public function show(QQ $qQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */

    // ## Route::get('edit/{Cusid}','QQController@edit')->name('edit');
    // ## 表示 $Cusid,
    // public function edit(QQ $qQ,EditCustomer $request)
    // {   
    //   $customers = QQ::where('Name', '=', 'PeterXP') // 取 Name 為 Peter 
    //   ->orderBy('Name', 'desc') // 根據price由高到低排列
    //   ->take(10) // 只取前10筆資料
    //   ->get();
    //   // $cusid = '1';
    //   // // $Cusid = QQ::where('Cusid', '=', '1')->get(); // 取 Name 為 Peter 
      
    //   // #### 原始
    //   // // ###### 傳送一個參數  POST 只1參數customers
    //   // return View::make('board',['customers' => $customers]);
    //   // $data = ['name' => 'ray','age' => 25];
    //   // $title = '自我介紹';

    //   #$RR = 'QQPOP';
    //   $RR = $request;
    //   $cusid = QQ::find(1);  ##### QQ::find(1)->invoice->Shop_name
    //   return view('board', compact(['customers', 'cusid','RR']));
    // }
    ## 修改客戶資料表格
    ## board.blade.php <a href="{{ action('QQController@edit',[...]) 傳進來參數
    public function edit(Request $request){
        //$customers=$request->Cusid;
        //dd($customers);
        ## Route::get('...','...@edit'); ## get參數
        return View::make('edit',['Cusid'=>$request->Cusid,'Name'=>$request->Name,'Address'=>$request->Address,'Phone'=>$request->Phone]);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */

    // ######################## 注意這個方法的參數
    // public function update($Cusid, EditCustomer $request)
    // {
    //   //改寫後，就輕快多了！
    //   ## firstOrFail()返回在數據庫中找到的第一條記錄。如果不存在匹配的模型，則會引發錯誤。它會拋出一個error。
    //   $customer = CustomerEloquent::where('Cusid', $Cusid)->firstOrFail();
    //   $customer->Phone = $request->Phone;
    //   $customer->save();

    //   return View::make('edit',[
    //     'customer' => $customer,
    //     'msg' => '修改成功'
    //   ]);
      
    // }
     ## 更新客戶資料
     public function update(Request $request){
        ## 
        if ($request->cancel){
            $customers = QQ::all();
            return View::make('board',['customers' => $customers]);
        } 

        ### edit 送出紐的內容
        ### <input type="hidden" id="oldId" name="oldId"  value="<?php echo $_GET['Cusid']; 
        ### 填入更新內容 
        // QQ::find(1);   ## id ...
        // $post = QQ::find($request->input('oldId'));
        // // $post->Name = 'James';
        // $post->Name = 'PeterXP';
        // #$post->Phone = '0912345678';
        // $post->save();
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



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(QQ $qQ)
    {
        //
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
