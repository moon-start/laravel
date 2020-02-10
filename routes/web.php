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
// Route::get('edit/{Cusid}','QQController@edit')->name('edit');



## resource 全部轉發的方式 : get post等
## 第一個參數 URL相對網址
## 第二個參數 Controller控制器


#### 
# KKController.php 的 in方法
// Route::resource('customer','KKController');



##### edit 表單
# KKController.php 控制表的 edit方法
// Route::get('edit/{Cusid}','QQController@edit')->name('edit');
// Route::post('edit/{Cusid}', 'QQController@update');



// Route::post('edit/{Cusid}', 'CustomerController@update');



## 路由 目錄參數
// {name?} 表示這個是有 初始值的 不會是null空值
## "{{ route('user',['id' => 'XP' ]) }}"
## http://192.168.1.114/user/XP 
Route::get('user/{id?}', function ($id = "moon") {
    return 'User '.$id;
})->name('user');
## http://192.168.1.114/users/11/score/44
// 注意：路由參數不能包含 - 字元。請使用底線 (_) 。
Route::get('users/{name?}/score/{project}', function ($name = 'Peter', $project){
    return 'Hello ,'.$name. ' Your project : '.$project;
});




## 驗證
Route::get('post/create', 'QQController@create');
Route::post('post', 'QQController@store');