@extends('layouts.app')

@section('title', '集合图鉴')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card my-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('produces.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的集合、配方" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- 无内容 --}}
    @include('shared._404', ['items' => $produces])

    {{-- 内容 --}}
    @include('produces._list', ['npcs' => $produces])

    {{-- 分页 --}}
    @include('shared._page', ['items' => $produces])
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('produces._sidebar')
  </div>
</div>

@endsection
