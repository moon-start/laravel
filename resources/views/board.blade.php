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
            <th>日期</th>
            <th>發票</th>
            <th>地點</th>
            <th>付款</th>
            <th>點數</th>
            <td>資料處理</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($customers as $customer){
            ?>
            <tr>
                    <td><?php echo $customer->paymentOf->date; ?></td>
                    <td><?php echo $customer->Invoice; ?></td>
                    <td><?php echo $customer->location; ?></td>
                    <td><?php echo $customer->paymentOf->payment; ?></td>
                    <td><?php echo $customer->paymentOf->points; ?></td>
               
                <td>
                    <a href="{{ action('QBController@newB', ['id'=>$customer->id]) }}" class="btn btn-success btn-sm">新增</a>

                    <!-- <a href=" action('QBController@edit', 
                                ['Cusid'=>$customer->Cusid,
                                'Name'=>$customer->Name,
                                'Address'=>$customer->Address,
                                'Phone'=>$customer->Phone]) " class="btn btn-success btn-sm">編輯</a> -->

                    <a href="{{ action('QBController@edit',['data'=>$itemOf]) }} " class="btn btn-success btn-sm">編輯</a>

                
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