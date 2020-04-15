@extends('layouts.app')

@section('title', '服务器')

@section('content')

<div class="row mb-5">
  <div class="col-lg-9 col-md-9 topic-list">
    <div class="row">
      @foreach ($servers as $server)
      <div class="col-lg-3 col-md-3">
        <div class="list-group mb-3">
          <div class="list-group-item">
            <div>{{$server->name}}</div>
            <div>{{ $server->birthday->format('Y-m-d') }}</div>
          </div>
          <div class="list-group-item">
            <div>合区信息</div>
            <div class="badge badge-success">{{ $server->name }}</div>
            @foreach ($server->subjects as $subject)
            <div class="badge badge-success">{{ $subject->name }}</div>
            @endforeach
          </div>
          <div class="list-group-item">
            <div>服务器信息</div>
            <div class="badge badge-success">角色数量 {{ $server->role_count }}</div>
            <div class="badge badge-success">等级上限 {{ $server->level }}</div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('servers._sidebar')
  </div>
</div>

@endsection
