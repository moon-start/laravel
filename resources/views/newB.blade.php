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
                <label for="itemA" class="col-sm-2 col-form-label">項目</label>
                <div class="col-sm-8">

                    <!-- 錯誤訊息的CSS .. is-invalid  -->
                    <input type="text" class="form-control {{ $errors->has('itemA') ? 'is-invalid' : '' }}" id="itemA" name="itemA" value="">
                        
                    <!-- 錯誤訊息的判斷法 -->
                    @if ($errors->has('itemA'))
                    <div class="invalid-feeback">
                    <strong>{{ $errors->first('itemA') }}</strong>
                    </div>
                    @endif
       
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="money" class="col-sm-2 col-form-label">價格</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control {{ $errors->has('money') ? 'is-invalid' : '' }}" id="money" name="money" value="">
                    <!-- 錯誤訊息的判斷法 -->
                    @if ($errors->has('money'))
                    <div class="invalid-feeback">
                    <strong>{{ $errors->first('money') }}</strong>
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="form-group row">
                <!-- col--指定了3個版面
                col-xs 是自動大小 所以會從尾端..慢慢被遮住 -->

                <div class="col-2"></div>
                <div class="col-6">
                    <input type="submit" class="btn btn-primary" value="送出">
                </div>
                <div class="col-1">
                    <input type="submit" class="btn btn-warning" value="取消" name="cancel">
                </div>
            </div>  
        </div>
        </div>
    </div>
    </div>
</form>
@stop