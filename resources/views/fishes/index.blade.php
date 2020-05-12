@extends('layouts.app')

@section('title', '休闲钓鱼')

@section('content')
<h1>休闲钓鱼</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card mb-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('items.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的鱼类" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- 无内容 --}}
    @include('shared._404', ['items' => $items])

    {{-- 内容 --}}
    @include('items._list', ['items' => $items])

    {{-- 分页 --}}
    @if($items->lastPage() > 1)
    <div>
      {!! $items->appends(Request::except('page'))->render() !!}
    </div>
    @endif
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('fishes._sidebar')
  </div>
</div>

@endsection
