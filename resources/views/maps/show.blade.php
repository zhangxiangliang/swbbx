@extends('layouts.app')

@section('title', $map->name)

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 内容 --}}
    <div class="mt-2">

      {{-- 无内容 --}}
      @include('shared._404', ['items' => $map])

      {{-- 地图信息 --}}
      @if($map)
      <div class="collapse show mb-2" id="map">
        @include('maps._item', ['map' => $map])
      </div>
      @endif

      {{-- 导师信息 --}}
      @if($map->teacher)
      <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#teacher">
        导师信息 <span class="badge badge-light">1</span>
      </button>

      <div class="collapse mb-2" id="teacher">
        @include('npcs._item', ['npc' => $map->teacher])
      </div>
      @endif

      {{-- NPC信息 --}}
      @if($map->npcs)
      <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#npcs">
        NPC 信息 <span class="badge badge-light">{{count($map->npcs)}}</span>
      </button>

      <div class="collapse" id="npcs">
        @include('npcs._list', ['npcs' => $map->npcs])
      </div>
      @endif

    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('maps._sidebar')
  </div>
</div>

@endsection
