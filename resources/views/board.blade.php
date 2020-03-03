@extends('layouts.master')
@section('title','消費列表')
@section('content')
<div class="row justify-content-center">
<div class="col-md-10">
    <div class="card">
    <div class="card-header">消費列表</div>
    <div class="card-body p-1">
        <table class="table table-hover m-0">
        <thead class="thead-darty">
            <tr>
            <th class="d-md-inline">日期</th>
            <th class="d-md-inline">發票</th>
            <th class="d-none d-md-inline">地點</th>
            <th class="d-none d-md-inline">付款</th>
            <th class="d-none d-md-inline">點數</th>
            <td class="d-md-inline">資料(項目處理)</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($customers as $customer){
            ?>
            <tr>
                    <!-- clearfix -->
                    <!-- class="d-sm-none"  電腦的消失了 -->
                    <!-- 電腦版 改成區塊 d-none d-md-block -->
                    <!-- 問號 d-md-inline -->
                    <!-- d-md-inline-block -->
                    <!-- d-md-inline -->
                    <td class="d-md-inline"><?php echo $customer->paymentOf->date; ?></td>
                    <td class="d-md-inline"><?php echo $customer->Invoice; ?></td>
                    <td class="d-none d-md-inline"><?php echo $customer->location; ?></td>
                    <td class="d-none d-md-inline"><?php echo $customer->paymentOf->payment; ?></td>
                    <td class="d-none d-md-inline"><?php echo $customer->paymentOf->points; ?></td>
               
                <td>
                  
                    <a href="{{ action('QBController@newB', ['id'=>$customer->id]) }}" class="d-md-inline btn btn-success btn-sm">新增</a>

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