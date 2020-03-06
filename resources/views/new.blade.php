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
                    <!-- <input type="text" class="form-control" id="payment" name="payment" value=""> -->
                    <select class="form-control {{ $errors->has('payment') ? 'is-invalid' : '' }}" id="payment" name="payment">
                        　<option value="現金">現金</option>
                        　<option value="悠遊卡">悠遊卡</option>
                        　<option value="Mcard(點點卡)">Mcard(點點卡)</option>
                    </select>


                    <!-- 錯誤訊息的判斷法 -->
                    @if ($errors->has('payment'))
                    <div class="invalid-feeback">
                    <strong>{{ $errors->first('payment') }}</strong>
                    </div>
                    @endif


                </div>
            </div>

      

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="points" class="col-sm-2 col-form-label">點數</label>
                <div class="col-sm-8">

                     <!-- 錯誤訊息的CSS .. is-invalid  -->    
                    <input type="text" class="form-control {{ $errors->has('points') ? 'is-invalid' : '' }}" id="points" name="points" value="">
                    <!-- 錯誤訊息的判斷法 -->
                    @if ($errors->has('points'))
                    <div class="invalid-feeback">
                    <strong>{{ $errors->first('points') }}</strong>
                    </div>
                    @endif

                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="Invoice" class="col-sm-2 col-form-label">發票</label>
                <div class="col-sm-8">
                    
                    <input type="text" class="form-control {{ $errors->has('points') ? 'is-invalid' : '' }}" id="Invoice" name="Invoice" value="">
                    <!-- 錯誤訊息的判斷法 -->
                    @if ($errors->has('Invoice'))
                    <div class="invalid-feeback">
                    <strong>{{ $errors->first('Invoice') }}</strong>
                    </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="location" class="col-sm-2 col-form-label">地點</label>
                <div class="col-sm-8">
                    
                    <input type="text" class="form-control {{ $errors->has('points') ? 'is-invalid' : '' }}" id="location" name="location" value="">
                    <!-- 錯誤訊息的判斷法 -->
                    @if ($errors->has('location'))
                    <div class="invalid-feeback">
                    <strong>{{ $errors->first('location') }}</strong>
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="form-group row">
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