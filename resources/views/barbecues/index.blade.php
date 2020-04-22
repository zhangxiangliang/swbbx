@extends('layouts.app')

@section('title', '物品图鉴')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    <div class="card my-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('barbecues.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的配方" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- 无内容 --}}
    @include('shared._404', ['items' => $barbecues])

    {{-- 内容 --}}
    <div class="card-columns">
      @foreach ($barbecues as $barbecue)
      <div class="card">
        <div class="list-group list-group-flush">
          <div class="list-group-item">
            <div>{{ $barbecue->name }}</div>
          </div>
          <div class="list-group-item">
            <div>配方</div>
            @foreach ($barbecue->items as $item)
            <div class="badge badge-success">{{ $item->name }}</div>
            @endforeach
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('barbecues._sidebar')
  </div>
</div>

@endsection
