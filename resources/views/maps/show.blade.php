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
          @if($map->meetings && count($map->meetings))
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#meetings">
            奇遇秘籍 <span class="badge badge-light">{{count($map->meetings)}}</span>
          </button>
          @endif

          @if($map->npcs && count($map->npcs))
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#npcs">
            NPC 信息 <span class="badge badge-light">{{count($map->npcs)}}</span>
          </button>
          @endif

          @if($map->titles && count($map->titles))
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#titles">
            师门称谓 <span class="badge badge-light">{{count($map->titles)}}</span>
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

          @if(count($map->superSkills))
          <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#superSkills">
            星穹技能 <span class="badge badge-light">{{count($map->superSkills)}}</span>
          </button>
          @endif
        </div>
        <div class="accordion-group">
          {{-- 导师信息 --}}
          @if($map->meetings)
          <div class="collapse" id="meetings" data-parent="#group">
            @include('meetings._lists', ['meetings' => $map->meetings, 'masonry' => 'meetings'])
          </div>
          @endif

          {{-- 导师信息 --}}
          @if($map->teacher)
          <div class="collapse" id="teacher" data-parent="#group">
            @include('npcs._item', ['npc' => $map->teacher, 'masonry' => 'teacher'])
          </div>
          @endif

          {{-- NPC信息 --}}
          @if($map->npcs && count($map->npcs) )
          <div class="collapse " id="npcs" data-parent="#group">
            @include('npcs._list', ['npcs' => $map->npcs, 'masonry' => 'npcs'])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if($map->titles && count($map->titles))
          <div class="collapse" id="titles" data-parent="#group">
            @include('titles._list', ['titles' => $map->titles, 'masonry' => 'titles'])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if($map->teacher && count($map->baseSkills))
          <div class="collapse" id="baseSkills" data-parent="#group">
            @include('skills._list', ['skills' => $map->baseSkills, 'masonry' => 'baseSkills'])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if($map->teacher && count($map->mountSkills))
          <div class="collapse" id="mountSkills" data-parent="#group">
            @include('skills._list', ['skills' => $map->mountSkills, 'masonry' => 'mountSkills'])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if($map->teacher && count($map->flySkills))
          <div class="collapse" id="flySkills" data-parent="#group">
            @include('skills._list', ['skills' => $map->flySkills, 'masonry' => 'flySkills'])
          </div>
          @endif

          {{-- 技能信息 --}}
          @if($map->teacher && count($map->superSkills))
          <div class="collapse" id="superSkills" data-parent="#group">
            @include('skills._super-list', ['skillsGroup' => $map->superSkillsGroup, 'masonry' => 'superSkills'])
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
