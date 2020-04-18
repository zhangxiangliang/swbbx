@extends('layouts.app')

@section('title', '物品图鉴')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">

    <div class="card">
      <div class="card-header bg-transparent">
        <form action="{{ route('items.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    @if(count($items) === 0)
    <div class="list-group mt-2">
      <div class="list-group-item">
        <div class="justify-content-between">
          <h5 class="mb-1">暂无数据</h5>
        </div>
      </div>
    </div>
    @endif

    <div class="card-columns mt-2">
      @foreach ($items as $item)
      <div class="card">
        <div class="list-group list-group-flush">
          <div class="list-group-item">
            <div>{{ $item->name }}</div>
            <div>
              <span class="badge badge-success">{{$item->level}}</span>
              <span class="badge badge-success">{{$item->category}}</span>
            </div>
          </div>
          <div class="list-group-item">
            <div>说明: {{$item->description ? $item->description : '无'}}</div>
          </div>
          <div class="list-group-item">
            <div>作用: {{$item->use ? $item->use : '无'}}</div>
          </div>
          <div class="list-group-item">
            <div>出处</div>
            @if(count($item->maps) === 0)
            <div class="badge badge-success">无</div>
            @endif
            @foreach($item->maps as $map)
            <div class="badge badge-success">{{$map}}</div>
            @endforeach
          </div>
        </div>
      </div>
      @endforeach

    </div>

    {{-- 分页 --}}
    @if($items->lastPage() > 1)
    <div>
      {!! $items->appends(Request::except('page'))->render() !!}
    </div>
    @endif
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('items._sidebar')
  </div>
</div>

@endsection
