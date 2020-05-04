@extends('layouts.app')

@section('title', isset($category) ? $category->name : '一起闯荡神武世界')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    <div class="card mb-2">
      <div class="card-header bg-transparent">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link {{ request()->get('order') !== 'recent'? 'active' : '' }}"
              href="{{ request()->url() }}?order=default">
              最后回复
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->get('order') === 'recent'? 'active' : '' }}"
              href="{{ request()->url() }}?order=recent">
              最新发布
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="list-group">
      {{-- 话题列表 --}}
      @include('topics._topic_list', ['topics' => $topics])
      {{-- 分页 --}}
      @if($topics->lastPage() > 1)
      <div class="mt-2">
        {!! $topics->appends(Request::except('page'))->render() !!}
      </div>
      @endif
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('topics._sidebar')
  </div>
</div>

@endsection
