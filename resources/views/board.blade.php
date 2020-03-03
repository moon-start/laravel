@extends('layouts.master')
@section('title','消費列表')
@section('content')
<div class="row justify-content-center">
<div class="col-md-10">

    <!-- 列表 -->
    <div class="col-12 m-0 p-0 card">
    <div class="col-12 card-header">消費列表</div>
    <!-- <div class="col-12 card-body  p-1"> -->
    <div class="col-12 card-body  m-0 p-2 pt-0 pb-0">
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

        <thead class="thead-darty bg-info">
            <!-- 背景顏色..bg-info  bg-danger-->
            <tr class="row m-0 p-0">
            <!-- col-xs-4 自動 -->
            <th class="col-lg-3 col-md-4 col-sm-4 d-md-inline">日期</th>
            <th class="col-lg-2 col-md-2 col-sm-3 d-md-inline">發票</th>
            <th class="col-lg-2 col-md-0          d-none d-lg-inline">地點</th>
            <th class="col-lg-1 col-md-1          d-none d-md-inline">付款</th>
            <th class="col-lg-1 col-md-1          d-none d-md-inline">點數</th>
            <td class="col-lg-3 col-md-4 col-sm-5 d-md-inline">資料(項目處理)</td>
            </tr>
        </thead>
        <tbody class="">
            <?php
            foreach ($customers as $customer){
            ?>

            <!-- 必須要歸0 tr -->
            <tr class="row m-0 p-0">
                    <!-- clearfix -->
                    <!-- class="d-sm-none"  電腦的消失了 -->
                    <!-- 電腦版 改成區塊 d-none d-md-block -->
                    <!-- 問號 d-md-inline -->
                    <!-- d-md-inline-block -->
                    <!-- d-md-inline -->
                    <td class="col-sm-4 col-md-4 col-lg-3 d-md-inline"><?php echo $customer->paymentOf->date; ?></td>
                    <td class="col-sm-3 col-md-2 col-lg-2 d-md-inline"><?php echo $customer->Invoice; ?></td>
                    <td class="         col-md-0 col-lg-2 d-none d-lg-inline"><?php echo $customer->location; ?></td>
                    <td class="         col-md-1 col-lg-1 d-none d-md-inline"><?php echo $customer->paymentOf->payment; ?></td>
                    <td class="         col-md-1 col-lg-1 d-none d-md-inline"><?php echo $customer->paymentOf->points; ?></td>
               
                <td class="col-sm-5 ol-md-4 col-lg-3 d-md-inline">
                  
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