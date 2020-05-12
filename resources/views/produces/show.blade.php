@extends('layouts.app')

@section('title', $produce->name)

@section('content')
<h1>{{$produce->name}}</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 内容 --}}
    <div class="mt-2">

      {{-- 无内容 --}}
      @include('shared._404', ['items' => $produce])

      {{-- 物品信息 --}}
      @if($produce)
      <div class="collapse show mb-2" id="produce">
        @include('produces._item', ['produce' => $produce])
      </div>
      @endif
    </div>

    <div id="group">
      <div class="accordion-header">
        @if($produce->items)
        <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#items">
          物品信息 <span class="badge badge-light">{{count($produce->items)}}</span>
        </button>
        @endif
      </div>

      <div class="accordion-group">
        {{-- 集合信息 --}}
        @if($produce->items)
        <div class="collapse" id="items" data-parent="#group">
          @include('items._list', ['items' => $produce->items, 'masonry' => 'items'])
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('produces._sidebar')
  </div>
</div>
@endsection
