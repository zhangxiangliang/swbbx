@extends('layouts.app')

@section('title', '奇遇秘籍')

@section('content')
<h1>奇遇秘籍</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card mb-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('meetings.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查的奇遇信息" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    {{-- 无内容 --}}
    @include('shared._404', ['items' => $meetings])

    {{-- 数据 --}}
    @include('meetings._lists', ['meetings' => $meetings])

    {{-- 分页 --}}
    @include('shared._page', ['items' => $meetings])
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('meetings._sidebar')
  </div>
</div>

@endsection
