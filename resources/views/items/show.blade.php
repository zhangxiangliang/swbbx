@extends('layouts.app')

@section('title', $item->name)

@section('content')

<h1>{{$item->name}}</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 内容 --}}
    <div class="mt-2">

      {{-- 无内容 --}}
      @include('shared._404', ['items' => $item])

      {{-- 物品信息 --}}
      @if($item)
      <div class="collapse show mb-2" id="item">
        @include('items._item', ['item' => $item])
      </div>
      @endif
    </div>

    <div id="group">
      <div class="accordion-header">
        @if($item->produces)
        <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#produces">
          集合信息 <span class="badge badge-light">{{count($item->produces)}}</span>
        </button>
        @endif
      </div>

      <div class="accordion-group">
        {{-- 集合信息 --}}
        @if($item->produces)
        <div class="collapse" id="produces" data-parent="#group">
          @include('produces._list', ['produces' => $item->produces])
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('items._sidebar')
  </div>


</div>
@endsection
