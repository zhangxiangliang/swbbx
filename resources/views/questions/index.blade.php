@extends('layouts.app')

@section('title', '科举答题器')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card my-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('questions.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的题目" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- 无内容 --}}
    @include('shared._404', ['items' => $questions])

    {{-- 内容 --}}
    <div class="card-columns">
      @foreach ($questions as $item)
      <div class="card">
        <div class="list-group list-group-flush">
          <div class="list-group-item">
            <span class="badge badge-success">{{$item->category}}</span>
          </div>
          <div class="list-group-item">
            问题: {{ $item->question }}
          </div>
          <div class="list-group-item">
            答案: {{ $item->answer }}
          </div>
        </div>
      </div>
      @endforeach
    </div>

    {{-- 分页 --}}
    @if($questions->lastPage() > 1)
    <div class="mt-3">
      {!! $questions->appends(Request::except('page'))->render() !!}
    </div>
    @endif
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('questions._sidebar')
  </div>
</div>

@endsection
