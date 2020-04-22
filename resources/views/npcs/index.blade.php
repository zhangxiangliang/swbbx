@extends('layouts.app')

@section('title', '物品图鉴')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card my-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('npcs.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的NPC、地图、喜好、好友" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- 无内容 --}}
    @include('shared._404', ['items' => $npcs])

    {{-- 内容 --}}
    @include('npcs._list', ['npcs' => $npcs])

    {{-- 分页 --}}
    @include('shared._page', ['items' => $npcs])
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('npcs._sidebar')
  </div>
</div>

@endsection
