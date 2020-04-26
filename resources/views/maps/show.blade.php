@extends('layouts.app')

@section('title', $map->name)

@section('content')

<h1>{{$map->name}}</h1>

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

      <div id="group">
        <div class="accordion-header">
          @if($map->teacher)
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#teacher">
            导师信息 <span class="badge badge-light">1</span>
          </button>
          @endif

          @if($map->npcs)
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#npcs">
            NPC 信息 <span class="badge badge-light">{{count($map->npcs)}}</span>
          </button>
          @endif

          @if($map->teacher && count($map->baseSkills))
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#baseSkills">
            师门技能 <span class="badge badge-light">{{count($map->baseSkills)}}</span>
          </button>
          @endif

          @if($map->teacher && count($map->mountSkills))
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#mountSkills">
            御魂技能 <span class="badge badge-light">{{count($map->mountSkills)}}</span>
          </button>
          @endif

          @if($map->teacher && count($map->flySkills))
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#flySkills">
            飞升技能 <span class="badge badge-light">{{count($map->flySkills)}}</span>
          </button>
          @endif
        </div>
        <div class="accordion-group">
          {{-- 导师信息 --}}
          @if($map->teacher)
          <div class="collapse" id="teacher" data-parent="#group">
            @include('npcs._item', ['npc' => $map->teacher])
          </div>
          @endif

          {{-- NPC信息 --}}
          @if($map->npcs)
          <div class="collapse " id="npcs" data-parent="#group">
            @include('npcs._list', ['npcs' => $map->npcs])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if($map->teacher && count($map->baseSkills))
          <div class="collapse" id="baseSkills" data-parent="#group">
            @include('skills._list', ['skills' => $map->baseSkills])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if($map->teacher && count($map->mountSkills))
          <div class="collapse" id="mountSkills" data-parent="#group">
            @include('skills._list', ['skills' => $map->mountSkills])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if($map->teacher && count($map->flySkills))
          <div class="collapse" id="flySkills" data-parent="#group">
            @include('skills._list', ['skills' => $map->flySkills])
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('maps._sidebar')
  </div>
</div>

@endsection
