@extends('layouts.master')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h4 class="m-0">編輯客戶資料</h4>
      </div>
      <div class="card-body">
          @isset($msg)
          <div class="alert alert-success" role="alert">
            {{ $msg ?? '沒有任何訊息' }}
            <button type="button" class="close" data-dismiss="alert" aria-label="CLose">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endisset

          <form action="{{ action('CustomerController@update', ['Cusid' => $Cusid]) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">客戶姓名</label>
              <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ $customer->Name }}">
                 @if ($errors->has('name'))
                   <div class="invalid-feeback">
                    <strong>{{ $errors->first('name') }}</strong>
                   </div>
                 @endif
            </div>
            <div class="form-group">
              <label for="phone">客戶電話</label>
              <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" value="{{ $customer->Phone }}">
                 @if ($errors->has('phone'))
                   <div class="invalid-feeback">
                    <strong>{{ $errors->first('phone') }}</strong>
                   </div>
                 @endif
            </div>
            <div class="row">
              <div class="col-md-6 mb-1">
                <button type="submit" class="btn btn-primary btn-block">修改</button>
              </div>
              <div class="col-md-6">
                <a href="{{ url('/board') }}" class="btn btn-danger btn-block">返回</a>
              </div>
            </div>
          </form>
        </div>  
      </div>
    </div>
  </div>
@endsection