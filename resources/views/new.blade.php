@extends('layouts.master')
@section('title','新增客戶')
@section('content')
<form action="{{ action('QBController@storeABC') }}" method="post">
    @csrf
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">新增消費</div>
        <div class="card-body p-1">
            
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="date" class="col-sm-2 col-form-label">日期</label>
                <div class="col-sm-8">
                    <input type="text"class="form-control" id="date" name="date"   value="{{$DD}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="payment" class="col-sm-2 col-form-label">付款</label>
                <div class="col-sm-8">
                    <!-- 錯誤訊息的CSS .. is-invalid  -->
                    <input type="text" class="form-control {{ $errors->has('Name') ? 'is-invalid' : '' }}" id="payment" name="payment" value="">
                      
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="points" class="col-sm-2 col-form-label">點數</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="points" name="points" value="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="Invoice" class="col-sm-2 col-form-label">發票</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="Invoice" name="Invoice" value="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="location" class="col-sm-2 col-form-label">地點</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="location" name="location" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" value="送出">
                </div>
                <div class="col-sm-1">
                    <input type="submit" class="btn btn-warning" value="取消" name="cancel">
                </div>
            </div>  
        </div>
        </div>
    </div>
    </div>
</form>
@stop