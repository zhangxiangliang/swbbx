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

      <div id="group">
        <div class="accordion-header">
          @if($npc->map)
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#maps">
            地图信息 <span class="badge badge-light">1</span>
          </button>
          @endif

          @if($npc->friends)
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#npcs">
            好友信息 <span class="badge badge-light">{{count($npc->friends)}}</span>
          </button>
          @endif

          @if(count($npc->baseSkills))
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#baseSkills">
            师门技能 <span class="badge badge-light">{{count($npc->baseSkills)}}</span>
          </button>
          @endif

          @if(count($npc->mountSkills))
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#mountSkills">
            御魂技能 <span class="badge badge-light">{{count($npc->mountSkills)}}</span>
          </button>
          @endif
        </div>

        <div class="accordion-group">
          {{-- 地图信息 --}}
          @if($npc->map)
          <div class="collapse" id="maps" data-parent="#group">
            @include('maps._list', ['maps' => [$npc->map]])
          </div>
          @endif

          {{-- 好友信息 --}}
          @if($npc->friends)
          <div class="collapse" id="npcs" data-parent="#group">
            @include('npcs._list', ['npcs' => $npc->friends])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if(count($npc->baseSkills))
          <div class="collapse" id="baseSkills" data-parent="#group">
            @include('skills._list', ['skills' => $npc->baseSkills])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if(count($npc->mountSkills))
          <div class="collapse" id="mountSkills" data-parent="#group">
            @include('skills._list', ['skills' => $npc->mountSkills])
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('npcs._sidebar')
  </div>
</div>

@endsection
