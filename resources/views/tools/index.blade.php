@extends('layouts.app')

@section('title', '主页')

@section('content')

<div class="flash-message">
  <p class="alert alert-info">
    【小提示】按钮基本都可点击跳转对应功能哦~
  </p>
</div>

<div class="row">
  <div class="col-lg-9 col-md-9">
    @include('tools._list')
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('tools._sidebar')
  </div>
</div>

@endsection
