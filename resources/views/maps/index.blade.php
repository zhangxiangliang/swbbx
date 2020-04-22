@extends('layouts.app')

@section('title', '门派图鉴')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
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
