@extends('layouts.app')

@section('title', '地图图鉴')

@section('content')
<h1>地图图鉴</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card mb-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('maps.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查的地图信息" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    {{-- 无内容 --}}
    @include('shared._404', ['items' => $maps])

    {{-- 数据 --}}
    <div class="mt-2">
      <div class="card-columns">
        @foreach ($maps as $map)
        @include('maps._item', ['map' => $map])
        @endforeach
      </div>
    </div>

    {{-- 分页 --}}
    @include('shared._page', ['items' => $maps])
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('maps._sidebar')
  </div>
</div>

@endsection
