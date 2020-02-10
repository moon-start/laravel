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
              </tr>
            </thead>

            <tbody>
            <tr>
              <td>A001</td>
              <td>王小明</td>
              <td>0912345678</td>
              <td>
                <a href="{{ route('user',['id' => 'XP' ]) }}" class="btn btn-info btn-sm">查看</a>
                <a href="{{ route('user',['id' => 'XP' ]) }}" class="btn btn-info btn-sm">查看</a>
              </td>
            </tr>
            </tbody>  
         

            <tbody>
              <?php
                foreach ($customers as $customer){
              ?>
                <tr>
                      <td><?php echo $customer->Cusid; ?></td>
                      <td><?php echo $customer->Name; ?></td>
                  <td><?php echo $customer->Phone; ?></td>
                </tr>
              
              <?php }  ?>
            </tbody>
          </table>
        </div>  
      </div>
    </div>
  </div>
  @stop