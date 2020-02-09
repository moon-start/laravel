<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



## 執行 QQ控制器  的index() 
## @index  錯誤??
Route::resource('QQ','QQController');



## resource 全部轉發的方式 : get post等
## 第一個參數 URL相對網址
## 第二個參數 Controller控制器


#### 
# KKController.php 的 in方法
// Route::resource('customer','KKController');



##### edit 表單
# KKController.php 控制表的 edit方法
// Route::get('edit/{Cusid}','QQController@edit');
// Route::post('edit/{Cusid}', 'QQController@update');



// Route::post('edit/{Cusid}', 'CustomerController@update');