@extends('layouts.app')

@section('title', '科举答题器')

@section('content')

<div class="row mb-5">
  <div class="col-lg-9 col-md-9 topic-list">
    <div class="card">
      <div class="card-body bg-transparent">
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

    <div class="list-group mt-2">
      @foreach ($questions as $item)
      <div class="list-group-item">
        <div class="d-flex align-items-center">
          <div class="badge badge-success d-block">{{ $item->category }}</div>
          <div class="ml-3">
            <h5 class="mb-1">{{ $item->question }}</h5>
            <p class="mb-1">{{ $item->answer }}</p>
          </div>
        </div>
      </div>
      @endforeach

      @if(count($questions) === 0)
      <div class="list-group-item">
        <div class="justify-content-between">
          <h5 class="mb-1">暂无数据</h5>
        </div>
        <p class="mb-1">
          少侠可以尝试输入其他关键词，可以使用空格间隔【搜索词】。<br>
          例如搜索 <span class="badge badge-success">钓鱼 愿者上钩</span> 即可搜索出包含钓鱼、愿者上钩相关内容。
        </p>
      </div>
      @endif
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
