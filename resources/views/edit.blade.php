@extends('layouts.master')
@section('title','編輯客戶資料')
@section('content')
<td>
{{action('QQController@update')}}
</td>

@stop