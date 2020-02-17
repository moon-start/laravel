<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


### DB
use Route;
use View;
use App\Data;

class DataController extends Controller
{
    //客戶列表
    public function index() {
        $customers = Data::all();
        return View::make('board',['customers' => $customers]);
    }

    //新增客戶資料
    public function new() {
        $customers = Data::all();
        return View::make('new',['customers' => $customers]);
    }
}
