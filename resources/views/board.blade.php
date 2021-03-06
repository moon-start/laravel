@extends('layouts.master')
@section('title','消費列表')
@section('content')
<div class="row justify-content-center">
<div class="col-md-10 m-0 p-0">

    <!-- 列表 -->
    <div class="col-12 m-0 p-0 card">  <!--對上最後面了-->
        <!-- <div class="col-12 card-header">消費列表</div> -->
    
        <!-- justify-content-center -->
        <!-- <form action="{{ action('QBController@storeABC') }}" method="post" class="col-12 row justify-content-center">
        @csrf
    

                    <div class="form-group">">消費列表</div>
                    <label for="payment" class="col-2 card-header col-form-label">月份</label>
                    <div class="col-8 card-header>

                        <select class="form-control" id="payment" name="payment">
                            　<option value="現金">現金</option>
                            　<option value="悠遊卡">悠遊卡</option>
                            　<option value="Mcard(點點卡)">Mcard(點點卡)</option>
                        </select>


                    
                    </div>
                    <input type="submit" class="col-4 card-header btn btn-primary" value="查詢">
        </form> -->


        <!-- form-group row + form標籤 =才正長 -->
        <!-- bg-secondary .bg-success .bg-danger .bg-warning. -->
        <!-- <form action="" class="form-group row  bg-success m-0 p-0">
            <div class="form-group row  bg-success m-0 p-0">
                <label for="exampleFormControlInput1" clas="col-2">Email address</label>
                <label for="AA" clas="col-2">QQQQQQQQQ ddress</label>
                <div class="col-8 m-0 p-0"><input type="email" class="form-control m-0 p-0" id="AA" aria-describedby="emailHelp" placeholder="Enter email"></div>
            <div>
            <div class="form-group row bg-warning m-0 p-0">
                <label for="BB" clas="col-2 m-0 p-0 bg-secondary">Email123 address</label>
                <div class="col-4 m-0 p-0"><input type="email" class="form-control m-0 p-0 bg-success" id="BB" aria-describedby="emailHelp" placeholder="Enter email"></div>
                <label for="CC" clas="col-2 m-0 p-0 bg-danger">QQQQ123 ddress</label>
                <div class="col-4 m-0 p-0"><input type="email" class="form-control m-0 p-0 bg-warning" id="CC" aria-describedby="emailHelp" placeholder="Enter email"></div>
            <div>
        </form> -->


    <!-- <div class="col-12 card-body  p-1"> -->
    <div class="col-12 card-body  m-0 p-0">
        <table class="col-12 text-center table table-hover">
        <!-- table-hover 移動效果 -->
        <!-- margin =0 -->
        <!-- bg-danger 背景顏色 -->

        <!-- 常用的代碼
        m：margin
        p：padding
        t：top
        r：right
        b：bottom
        l：left
        x：-right和-left
        y：-top 和 -bottom -->

        <!-- 
        m：margin
        mt：margin-top
        mr：margin-right
        mb：margin-bottom
        ml：margin-left
        mx：margin-right 和 margin-left
        my：margin-top 和 margin-bottom

        p：padding
        pt：padding-top
        pr：padding-right
        pb：padding-bottom
        pl：padding-left
        px：padding-right 和 padding-left
        py：padding-top 和 padding-bottom -->
        
        <!-- 
        1：0.25 * 1rem = 0.25px
        2：0.5 * 1rem = 8px
        3：1 * 1rem = 16px
        4：1.5 * 1rem = 24px
        5：3 * 1rem = 48px -->

        <!-- 
        d-block → display: block
        d-inline → display: inline
         -->

        <!-- 
        text-light
        p-4 
        text-secondary -->

        <!--  _variable.scss  可以修改 
        <div class="box border">呈現四邊有線</div>
        <div class="box border-top">呈現上邊有線</div>
        <div class="box border-right">呈現右邊有線</div>
        <div class="box border-bottom">呈現下邊有線</div>
        <div class="box border-left">呈現左邊有線</div>

        <div class="box border-0">取消四邊線條</div>
        <div class="box border border border-top-0">取消上邊線條</div>
        <div class="box border border-right-0">取消右邊線條</div>
        <div class="box border border-bottom-0">取消下邊線條</div>
        <div class="box border border-left-0">取消左邊線條</div>

        <div class="box border rounded">四腳呈現圓弧</div>
        <div class="box border rounded-top">呈現上邊圓弧</div>
        <div class="box border rounded-right">呈現右邊圓弧</div>
        <div class="box border rounded-bottom">呈現下邊圓弧</div>
        <div class="box border rounded-left">呈現左邊圓弧</div>

        <div class="box border rounded-circle">呈現圓形形狀</div>
        <div class="box box1 border rounded-pill">呈現膠囊形狀</div>

        <div class="box border border-primary">呈現主題顏色</div>
        <div class="box border border-danger">呈現主題顏色</div> -->

        <thead class="thead-darty">
            <!-- 背景顏色..bg-info  bg-danger-->
            <tr class="row m-0 p-0 bg-info">
            <!-- col-xs-4 自動 -->
            <th class="col-lg-3 col-md-4 col-sm-4 d-inline">日期</th>
            <th class="col-lg-2 col-md-3 col-sm-3 d-inline">發票</th>
            <th class="col-lg-2 col-md-0          d-none d-lg-inline">地點</th>
            <th class="col-lg-1 col-md-0          d-none d-lg-inline">付款</th>
            <th class="col-lg-1 col-md-0          d-none d-lg-inline">點數</th>
            <!-- td 改成 th --> 
            <!-- xs sm md lg 小到大-->
            
            <!-- 手機 -->
            <!-- xs Y方向 sm X方向 -->
            <th class="col-lg-3 col-md-5 col-sm-5 d-none d-sm-inline">資料(項目處理)</th>
            </tr>
        </thead>
        <tbody class="">
            <?php
            foreach ($customers as $customer){
            ?>


<!-- 
第2個點開始  會使用空白
button.btn.btn-primary
<button class="btn btn-primary"></button> 

td.col-sm-4.col-md-4
<td class="col-sm-4 col-md-4"></td> 

點前面不加 預設是div
.moon
<div class="moon"></div>

-->
<!-- 
//style +tab
<style>
  .QQ {
    
    //h +tab
    height:100vh;
    //bgi +tab
    background-image: url(https://bzj7jdmrn8bbwmcy2kazaa-on.drv.tw/www/web/images/%E5%A3%81%E7%B4%99C-okk.png);
  }
</style> 

/*bgs +tab*/
 background-size: cover;
 
 /*bgp +tab*/
 background-position: center center;
-->




            <!-- 必須要歸0 tr -->
            <tr class="row m-0 p-0">
                    <!-- clearfix -->
                    <!-- class="d-sm-none"  電腦的消失了 -->
                    <!-- 電腦版 改成區塊 d-none d-md-block -->
                    <!-- 問號 d-md-inline -->
                    <!-- d-md-inline-block -->
                    <!-- d-md-inline -->
                    <td class="col-sm-4 col-md-4 col-lg-3 d-inline"><?php echo $customer->paymentOf->date; ?></td>
                    <td class="col-sm-3 col-md-3 col-lg-2 d-inline"><?php echo $customer->Invoice; ?></td>
                    <td class="         col-md-0 col-lg-2 d-none d-lg-inline"><?php echo $customer->location; ?></td>
                    <td class="         col-md-0 col-lg-1 d-none d-lg-inline"><?php echo $customer->paymentOf->payment; ?></td>
                    <td class="         col-md-0 col-lg-1 d-none d-lg-inline"><?php echo $customer->paymentOf->points; ?></td>
               
                <td class="col-sm-5 ol-md-5 col-lg-3 d-md-inline">
                    
                    <a href="{{ action('QBController@newB', ['id'=>$customer->id]) }}" class="btn btn-success btn-sm">新增</a>

                    <!-- <a href=" action('QBController@edit', 
                                ['Cusid'=>$customer->Cusid,
                                'Name'=>$customer->Name,
                                'Address'=>$customer->Address,
                                'Phone'=>$customer->Phone]) " class="btn btn-success btn-sm">編輯</a> -->

                    <a href="{{ action('QBController@edit',['id'=>$customer->id]) }} " class="btn btn-success btn-sm">編輯</a>

                    <a href="{{ action('QBController@delete', ['id'=>$customer->id]) }}" class="btn btn-danger btn-sm">刪除</a>
                </td>
               

                <!-- ################################ -->
                <!-- url('/board') -->
                <!-- http://192.168.1.115/board -->
                
                <!-- <td> 顯示測試
                 route('new123')
                 action('QQController@update') 
                </td> -->
            </tr>
            <?php }  ?>

            
        </tbody>
        </table>
    </div>  
    </div>
</div>
</div>
@stop