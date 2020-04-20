@extends('layouts.app')

@section('title', '物品图鉴')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card">
      <div class="card-header bg-transparent">
        <form action="{{ route('npcs.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的NPC、地址、喜好、好友" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- 内容 --}}
    <div class="mt-2">
      @if(count($npcs) === 0)
      @include('shared._404')
      @endif

      <div class="card-columns">
        @foreach ($npcs as $npc)
        <div class="card">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex align-items-center justify-content-between">
                <div>{{ $npc->name }}</div>
                <a href="{{route('npcs.index', ['search' => $npc->map->name])}}"
                  class="badge badge-success">{{ $npc->map->name }}</a>
              </div>
            </div>
            <div class="list-group-item">
              {{$npc->description}}
            </div>
            <div class="list-group-item">
              <div>喜好</div>
              @foreach ($npc->favorites as $favorite)
              <a href="{{route('npcs.index', ['search' => $favorite->name])}}"
                class="badge badge-success">{{ $favorite->name }}</a>
              @endforeach
            </div>
            <div class="list-group-item">
              <div>好友</div>
              @foreach ($npc->friends as $friend)
              <a href="{{route('npcs.index', ['search' => $friend->name])}}"
                class="badge badge-success ">{{ $friend->name }}</a>
              @endforeach
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- 分页 --}}
    @if($npcs->lastPage() > 1)
    <div>
      {!! $npcs->appends(Request::except('page'))->render() !!}
    </div>
    @endif
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('npcs._sidebar')
  </div>
</div>

@endsection
