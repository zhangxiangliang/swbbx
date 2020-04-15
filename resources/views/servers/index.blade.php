@extends('layouts.app')

@section('title', '服务器')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">

    <div class="card">
      <div class="card-header bg-transparent">
        <form action="{{ route('servers.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的服务器" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    @if(count($servers) === 0)
    <div class="list-group mt-2">
      <div class="list-group-item">
        <div class="justify-content-between">
          <h5 class="mb-1">暂无数据</h5>
        </div>
      </div>
    </div>
    @endif

    <div class="row mt-2">
      @foreach ($servers as $server)
      <div class="col-lg-3 col-md-3">
        <div class="list-group mb-2">
          <div class="list-group-item">
            <div>{{ $server->name }}</div>
            <div>{{ $server->birthday->format('Y-m-d') }}</div>
          </div>
          @if($server->pid === 0)
          <div class="list-group-item">
            <div>合区信息</div>
            <div class="badge badge-success">{{ $server->name }}</div>
            @foreach ($server->branches as $branch)
            <div class="badge badge-success">{{ $branch->name }}</div>
            @endforeach
          </div>
          @else
          <div class="list-group-item">
            <div>所属服务器</div>
            <div class="badge badge-success">{{ $server->master->name }}</div>
          </div>
          @endif
          <div class="list-group-item">
            <div>服务器信息</div>
            <div class="badge badge-success">角色数量 {{ $server->role_count }}</div>
            <div class="badge badge-success">等级上限 {{ $server->level }}</div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    {{-- 分页 --}}
    @if($servers->lastPage() > 1)
    <div>
      {!! $servers->appends(Request::except('page'))->render() !!}
    </div>
    @endif
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('servers._sidebar')
  </div>
</div>

@endsection
