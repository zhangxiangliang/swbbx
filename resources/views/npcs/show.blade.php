@extends('layouts.app')

@section('title', $npc->name)

@section('content')

<h1>{{$npc->name}}</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 内容 --}}
    <div class="mt-2">

      {{-- 无内容 --}}
      @include('shared._404', ['items' => $npc])

      {{-- NPC信息 --}}
      @if($npc)
      <div class="collapse show mb-2" id="npc">
        @include('npcs._item', ['npc' => $npc])
      </div>
      @endif

      {{-- 好友信息 --}}
      @if($npc->friends)
      <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#npcs">
        好友信息 <span class="badge badge-light">{{count($npc->friends)}}</span>
      </button>

      <div class="collapse" id="npcs">
        @include('npcs._list', ['npcs' => $npc->friends])
      </div>
      @endif

    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('npcs._sidebar')
  </div>
</div>

@endsection
