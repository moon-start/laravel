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


## A 原始
## Route::get('/', function () {
##     return view('welcome');
## });

## B  ['middleware' => 'auth', function () {....}]
## Route::get('/',['middleware' => 'auth',function () {
##    return view('welcome');
## }]);

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('web');


## 中介層--> 路由器 -->過程
// Route::middleware('auth')->get('admin/profile', function () {
//     //
// });
## 多個中介層
// Route::middleware('first', 'second')->get('/', function () {
//     //
// });
##
Route::middleware('QB:Hello,Kao')->get('/', function (){
    #return view('welcome');

    echo 'in Route';
});

## 執行 QQ控制器  的index() 
## @index  錯誤??
// Route::resource('QQ','QQController');


########### {{action('註冊'}}
########### 註冊::QQController@new
##################################
########### 表示在 QQController.php 宣告方法,如沒宣告控制器不能使用
########### 註冊 new方法...在QQController@new'
## 客戶列表
Route::get('QQ','QQController@index');
## 新增客戶資料(進入new畫面)
Route::get('new','QQController@new')->name('new123');
Route::post('store','QQController@storeABC');
## 修改客戶資料表格(進入deit)
Route::get('edit','QQController@edit');
## 更新客戶資料(送出)
Route::post('update','QQController@update');
## 刪除客戶資料
Route::get('delete','QQController@delete');




###### 修改
###### views/welcome.blade.php        包含  <a href="./QB">頁面瀏覽</a>
###### views/partials/nav.blade.php   包含 index 和 new
###### views/partials/board.blade.php 包含 edit  和 delete
###### views/partials/edit.blade.php  包含 edit  
###### views/partials/new.blade.php   包含 @storeABC 
Route::get('QB','QBController@index');   
## 新增客戶資料(進入new畫面)
Route::get('new','QBController@new')->name('new123');
Route::post('store','QBController@storeABC');
## 新增項目(進入newB畫面)
Route::get('newB','QBController@newB')->name('new123');
Route::post('storeB','QBController@storeBBB');
## 修改客戶資料表格(進入deit)
Route::get('edit','QBController@edit');
## 更新客戶資料(送出)
Route::post('update','QBController@update');
## 刪除客戶資料
Route::get('delete','QBController@delete');
####
####
####
//預設驗證功能
//Auth::routes();
//啟用 Email 驗證功能
//Auth::routes(['verify'=>true]);

## 取消註冊功能
#Auth::routes(['register' => false]);
## 註冊 http://192.168.1.116/register
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');





// ## 驗證
// Route::get('post/create', 'QQController@create');
// Route::post('post', 'QQController@store');

##### edit 表單
# KKController.php 控制表的 edit方法
### blabe版..Cusid參數
###############################################  route('edit',['Cusid' => '1']) 用到
## route('資料表的名稱')  ......... route('customers',
// Route::get('edit/{Cusid}','QQController@edit')->name('edit');  


### 會影響上面的
### ~~缺少 Cusid 參數.....get???
// Route::get('edit/{Cusid}','QQController@edit');
// Route::post('edit/{Cusid}', 'QQController@update')->name('edit');





## resource 全部轉發的方式 : get post等
## 第一個參數 URL相對網址
## 第二個參數 Controller控制器
#### 
# KKController.php 的 in方法
// Route::resource('customer','KKController');
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






### 新增紀錄
//Route::resource('customer', 'CustomerController');
Route::get('data', 'DataController@index');
Route::post('data', 'DataController@new');
