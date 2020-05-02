@extends('layouts.app')

@section('title', '经验计算器')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">

    <div id="group">
      <div class="accordion-header">
        @if($levels)
        <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#levels">
          等级经验 <span class="badge badge-light">{{count($levels)}}</span>
        </button>
        @endif

        @if($skills)
        <button class="btn btn-primary mb-2" data-toggle="collapse" data-target="#skills">
          技能经验 <span class="badge badge-light">{{count($skills)}}</span>
        </button>
        @endif
      </div>

      <div class="accordion-group">
        {{-- 集合信息 --}}
        @if($skills)
        <div class="collapse" id="skills" data-parent="#group">
          @include('experiences._skill-list', ['skills' => $skills])

          {{-- 无内容 --}}
          @if(count($skills) === 0)
          @include('shared._404', ['items' => null])
          @endif
        </div>
        @endif

        {{-- 集合信息 --}}
        @if($levels)
        <div class="collapse" id="levels" data-parent="#group">
          @include('experiences._level-list', ['levels' => $levels])

          {{-- 无内容 --}}
          @if(count($levels) === 0)
          @include('shared._404', ['items' => null])
          @endif
        </div>
        @endif
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('experiences._sidebar')
  </div>
</div>

@endsection
