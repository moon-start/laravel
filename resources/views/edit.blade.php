@extends('layouts.master')
@section('title','編輯客戶資料')
@section('content')
<td>
<!-- 會傳回web.php 設定的URL -->
<!-- http://192.168.1.115/update -->
<!--action('QQController@update')-->
</td>




<!-- foreach($AR as $DD) -->


<form action="{{ action('QBController@update') }}" method="post">
    @csrf

    <?php
    foreach ($AR as $DD){
    ?>
    <div class="row justify-content-center">
    
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">編輯項目資料</div>
        <div class="card-body p-1">

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="Name" class="col-sm-2 col-form-label">項目</label>
                <div class="col-sm-8">
                <!-- $DD->item -->
                    <input type="text" class="form-control" id="Name" name="Name" value="{{count($AR)}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="Address" class="col-sm-2 col-form-label">價格</label>
                <div class="col-sm-8">  
                <!-- $DD->money -->
                    <input type="text" class="form-control" id="Address" name="Address" value="">  
                </div>
            </div>
            


            <div class="form-group row">
                <div class="col-sm-1"></div>
                <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" value="送出">
                    <input type="hidden" id="oldId" name="oldId"  value="">
                </div>
                <div class="col-sm-1">
                    <input type="submit" class="btn btn-warning" value="取消" name="cancel">
                </div>
            </div>  
        </div>
        </div>
    </div>

    </div>
    <?php }  ?>
</form>
@stop


<!-- endforeach -->