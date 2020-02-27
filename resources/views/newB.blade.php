@extends('layouts.master')
@section('title','新增項目')
@section('content')
<form action="{{ action('QBController@storeBBB') }}" method="post">
    @csrf
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">新增項目</div>
        <div class="card-body p-1">
            
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="dateA" class="col-sm-2 col-form-label">日期</label>
                <div class="col-sm-8">  
                    <input type="text"class="form-control" id="dateA" name="dateA"   value="{{ $customerOK->paymentOf->date }}" readonly="readonly">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="date" class="col-sm-2 col-form-label">發票</label>
                <div class="col-sm-8">
                    <input type="text"class="form-control" id="date" name="date"   value="{{ $customerOK->Invoice }}" readonly="readonly">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="item" class="col-sm-2 col-form-label">項目</label>
                <div class="col-sm-8">

                    <!-- 錯誤訊息的CSS .. is-invalid  -->
                    <input type="text" class="form-control {{ $errors->has('item') ? 'is-invalid' : '' }}" id="item" name="item" value="">
                        
                    <!-- 錯誤訊息的判斷法 -->
                    @if ($errors->has('item'))
                    <div class="invalid-feeback">
                    <strong>{{ $errors->first('item') }}</strong>
                    </div>
                    @endif
       
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="money" class="col-sm-2 col-form-label">價格</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="money" name="money" value="">
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