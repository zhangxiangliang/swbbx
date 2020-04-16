@extends('layouts.app')

@section('title', '主页')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9">
    <div class="row mt-2">
      @foreach ($categories as $category => $tools)
      <div class="col-lg-6 col-md-6">
        <div class="list-group mb-2">
          <div class="list-group-item">
            {{$category}}
          </div>
          @foreach ($tools as $tool)
          <div class="list-group-item">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h5 class="mb-1">{{$tool->title}}</h5>
                <p class="mb-1">{{$tool->description}}</p>
              </div>
              @if($tool->route === '')
              <div class="badge badge-secondary d-block">开发中</div>
              @else
              <div class="badge badge-success d-block">查看</div>
              @endif
            </div>
          </div>
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('tools._sidebar')
  </div>
</div>

@endsection
