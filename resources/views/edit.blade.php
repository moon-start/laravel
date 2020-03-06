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

   
    <div class="row">
    <?php
    $AA = $AR->count();
    ?>
    @if($AA!=0)
    <?php
    $qq = 0;
    foreach ($AR as $DD){
    $qq = $qq+1;
    ?>
   
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">編輯 項目 {{$qq}} 資料</div>
        <div class="card-body p-1">

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="Name" class="col-sm-2 col-form-label">項目</label>
                <div class="col-sm-8">
                <!-- $DD->item -->
                    <input type="text" class="form-control" id="item{{$qq}}" name="item{{$qq}}" value="{{ $DD->item }}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="Address" class="col-sm-2 col-form-label">價格</label>
                <div class="col-sm-8">  
                <!-- $DD->money -->
                    <input type="text" class="form-control" id="money{{$qq}}" name="money{{$qq}}" value="{{ $DD->money }}">  
                </div>
            </div>
            


            
        </div>
        </div>
    </div>

    <?php }  ?>


    </div>
    <div class="row">
   


        <div class="col-md-8">
            <div class="card">
            <div class="card-header">更新 項目資料</div>
            <div class="card-body p-1">
                <!--  -->
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-9">
                        <input type="submit" class="btn btn-primary" value="送出">
                        <input type="hidden" id="oldId" name="oldId"  value="{{ $DD->Invoice_ID }}">
                    </div>
                    <div class="col-sm-1">
                        <input type="submit" class="btn btn-warning" value="取消" name="cancel">
                    </div>
                </div>  
                <!--  -->
            </div>
            </div>
        </div>

    </div>
    @else
    
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">編輯 項目 1 資料</div>
            <div class="card-body p-1">

                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <label for="Name" class="col-sm-2 col-form-label">項目</label>
                    <div class="col-sm-8">
                    <!-- $DD->item -->
                        <input type="text" class="form-control" id="A" name="A" value="" readonly="readonly">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <label for="Address" class="col-sm-2 col-form-label">價格</label>
                    <div class="col-sm-8">  
                    <!-- $DD->money -->
                        <input type="text" class="form-control" id="B" name="B" value="" readonly="readonly">  
                    </div>
                </div>    
            </div>
            </div>
        </div>

    </div>
    <div class="row">

        <!-- <div class="col-md-8">
            <div class="card">
            <div class="card-header">更新 項目資料 (null資料)</div>
            <div class="card-body p-1"> -->
                
                <!--  -->
                <div class="form-group row">
                    <!-- <div class="col-2 col-xs-1"></div> -->
                    <div class="card-header col-2 col-xs-1">更新 項目資料 (null資料)</div>

                    <div class="col-6 col-xs-6">
                        <input type="submit" class="btn btn-primary" value="送出">
                        <input type="hidden" id="oldId" name="oldId"  value="123">
                    </div>
                    <div class="col-1 col-xs-1">
                        <input type="submit" class="btn btn-warning" value="取消" name="cancel">
                    </div>
                    
                </div>  
                <!--  -->

            <!-- </div>
            </div> -->
        </div>



    </div>
    @endif



    
    
</form>
@stop


<!-- endforeach -->