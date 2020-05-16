@extends('layouts.app')

@section('title', '等级经验表')

@section('content')
<h1>等级经验表</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card mb-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('level-experiences.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的等级" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- 无内容 --}}
    @include('shared._404', ['items' => $levels])

    {{-- 内容 --}}
    @include('level-experiences._list', ['levels' => $levels])

    {{-- 分页 --}}
    @if($levels->lastPage() > 1)
    <div class="mt-3">
      {!! $levels->appends(Request::except('page'))->render() !!}
    </div>
    @endif
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('level-experiences._sidebar')
  </div>
</div>

@endsection
