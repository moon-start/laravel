@extends('layouts.master')
@section('title','客戶列表')
@section('content')
<div class="row justify-content-center">
<div class="col-md-10">
    <div class="card">
    <div class="card-header">客戶列表</div>
    <div class="card-body p-1">
        <table class="table table-hover m-0">
        <thead class="thead-darty">
            <tr>
            <th>客戶編號</th>
            <th>客戶姓名</th>
            <th>客戶電話</th>
            <td>資料處理</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($customers as $customer){
            ?>
            <tr>
                    <td><?php echo $customer->id; ?></td>
                    <td><?php echo $customer->location; ?></td>
                    <td><?php echo $customer->Payment_ID; ?></td>
                    <td><?php echo $customer->itemOf()->item; ?></td>
                <td>
                    <a href="{{ action('QBController@edit', 
                                ['Cusid'=>$customer->Cusid,
                                'Name'=>$customer->Name,
                                'Address'=>$customer->Address,
                                'Phone'=>$customer->Phone]) }}" class="btn btn-success btn-sm">編輯</a>
                
                    <a href="{{ action('QBController@delete', ['Cusid'=>$customer->Cusid]) }}" class="btn btn-danger btn-sm">刪除</a>
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