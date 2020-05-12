@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('content')

<div class="row">

  <div class="col-lg-3 col-md-3 d-sm-none d-xs-none d-md-block user-info">
    <div class="card ">
      @if ($user->avatar)
      <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
      @endif

      <div class="card-body">
        <h5><strong>个人简介</strong></h5>
        <p>{{ $user->introduction }}</p>
        <hr>
        <h5><strong>注册于</strong></h5>
        <p>{{ $user->created_at->diffForHumans() }}</p>
      </div>
    </div>
  </div>

  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mt-md-0 mt-sm-2">
    <div class="card ">
      <div class="card-body">
        <h1 class="mb-0" style="font-size:22px;">{{ $user->name }}</h1>
      </div>
    </div>
    <hr>

    {{-- 用户发布的内容 --}}
    <div class="card">
      <div class="card-body">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link bg-transparent {{ request()->get('tab', 'topics') === 'topics' ? 'active' : '' }}"
              href="{{ route('users.show', $user->id) }}">
              Ta 的话题
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-transparent {{ request()->get('tab', 'topics') === 'replies' ? 'active' : '' }}"
              href="{{ route('users.show', [$user->id, 'tab' => 'replies']) }}">
              Ta 的回复
            </a>
          </li>
        </ul>
        @if (request()->get('tab', 'topics') === 'topics')
        @include('users._topics', ['topics' => $user->topics()->recent()->paginate()])
        @else
        @include('users._replies', ['replies' => $user->replies()->with('topic')->recent()->paginate()])
        @endif
      </div>
    </div>

  </div>
</div>
@stop
