<?php

namespace App\Http\Controllers;

use App\QQ;
use Illuminate\Http\Request;
## 新增兩行
use Route;
use View;
## 新增資料庫用-問號2?
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
        $SS = DB::select('select * from Invoice');
        // 可綁定參數
        // $customers = DB::select('select * from customers where Name = :names', ['names' => "Peter"]);
        ## ######### make('SQL'); ## SQL.blade.php
        return View::make('SQL',['Invoice' => $SS]);
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
    public function edit(QQ $qQ)
    {
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QQ $qQ)
    {
    // public function update($Cusid, EditCustomer $request){
    //     //
    //      //改寫後，就輕快多了！
    //     $customer = CustomerEloquent::where('Cusid', $Cusid)->firstOrFail();
    //     $customer->Phone = $request->Phone;
    //     $customer->save();

    //     return View::make('edit',[
    //     'customer' => $customer,
    //     'msg' => '修改成功'
    //     ]);
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
