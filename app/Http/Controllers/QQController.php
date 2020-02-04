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
        //
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
        //
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
