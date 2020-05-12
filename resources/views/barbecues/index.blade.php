@extends('layouts.app')

@section('title', '篝火派对')

@section('content')
<h1>篝火派对</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card mb-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('barbecues.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的烧烤配方" aria-label=""
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
    @include('barbecues._sidebar')
  </div>
</div>

@endsection
