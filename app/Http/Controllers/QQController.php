<?php

namespace App\Http\Controllers;

## 附加新增 --model
## 或者單獨 php artisan make:model Customer 
## 建議是一個 資料表名稱
use App\QQ;
// use App\customers;

## 多了這行? 這好像是語法自動新增..
// use Illuminate\Database\QueryException;
// use Illuminate\Support\Facades\Validator;
use Validator,Input,Redirect; 
// use 


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



class QQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ## 專案/resources/views (等於) View::make

        ## 第一個
        ##  專案/resources/views/board.blade.php
        ## ############ make('board');
        ## return View::make('board');

        ## 第二個 ## from 資料表名稱
        // $SS = DB::select('select * from Invoice');
        // // 可綁定參數
        // // $customers = DB::select('select * from customers where Name = :names', ['names' => "Peter"]);
        // ## ######### make('SQL'); ## SQL.blade.php
        // return View::make('SQL',['Invoice' => $SS]);


        ## 第三個
        $customers = QQ::all();  //->isEmpty();
        
        // if( $customers ){
        //   ## 只能執行一次 不然資料會重複的錯誤
        //   ## 新增一筆資料 ## 因為欄位(不可以空值)
          
        // } else{   }
        

        ###### 寫入一筆資料
        // $post = new QQ;
        // $post->id = 1;
        // $post->Cusid = '1';
        // $post->Name = 'PeterXP';
        // $post->Address = '1234';
        // $post->Phone = '0955';
        // $post->save();

        
       

        ####### 取出資料表 第一筆資料 ##### 修改
        $post = QQ::find(1);
        // $post->Name = 'James';
        $post->Name = 'PeterXP';
        #$post->Phone = '0912345678';
        $post->save();



        


        ## 軟刪除
        #$post = QQ::withTrashed()->get();
        // // 確認是否經刪除
        // if ($flight->trashed()) {
        //   //
        // }


        
        ## 追加的SQL語法
        $customers = QQ::where('Name', '=', 'PeterXP') // 取 Name 為 Peter 
        ->orderBy('Name', 'desc') // 根據price由高到低排列
        ->take(10) // 只取前10筆資料
        ->get();

        $Cusid = QQ::where('Cusid', '=', '1')->get(); // 取 Name 為 Peter 

        ###### 傳送一個  POST 只1參數customers
        // return View::make('board',['customers' => $customers]);
        return View::make('board',['name' => "123"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // ## 新增一筆資料
        // $post = new QQ;
        // $post->GGGid = 15;
        // $post->Name = 'PeterXP';
        // $post->save();

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
    public function edit(QQ $Cusid)
    {
        // $validator = Validator::make(
        //     $request->all(),[
        //       'Name' => 'required|string',
        //       'Phone' => 'required|string'
        //     ],[
        //       'required' => '不可為空白',
        //       'required' => '須為字串'
        //     ]
        // );
      
      
        // // 判斷方式
        // if ($validator->fail()){
        //     return redirect()->back()->withErrors($validator);
        // } else {  
        //   // $customer = CustomerEloquent::where('Cusid',$cusid)->firstOrFail();
        //   $customer = customers::where('Cusid',$cusid)->firstOrFail();
        //   $customer->Phone = $request->Phone;
        //   $customer->save();
  
        //   return View::make('edit',[
        //     'customer' => $customer,
        //     'msg' => '修改成功'
        //   ]);
        // }

        $customer = QQ::where('Cusid',$Cusid)->firstOrFail();
        $customer->Phone = $request->Phone;
        $customer->save();


        // ->with('user' => $user);
        return View::make('edit',[
          'customer' => $customer,
          'msg' => '修改成功'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */

    ######################## 注意這個方法的參數
    public function update(QQ $Cusid, KKRequest $request)
    {
      //改寫後，就輕快多了！
      $customer = CustomerEloquent::where('Cusid', $Cusid)->firstOrFail();
      $customer->Phone = $request->Phone;
      $customer->save();

      return View::make('edit',[
        'customer' => $customer,
        'msg' => '修改成功'
      ]);
      
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
}
