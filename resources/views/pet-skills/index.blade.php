@extends('layouts.app')

@section('title', '宠物技能')

@section('content')
<h1>宠物技能</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 搜索 --}}
    <div class="card mb-2">
      <div class="card-header bg-transparent">
        <form action="{{ route('pet-skills.index') }}" method="GET" accept-charset="UTF-8">
          <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="输入需要查询的技能名称" aria-label=""
              value="{{request()->get('search', '')}}" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">搜索</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- 无内容 --}}
    @include('shared._404', ['items' => $petSkills])

    {{-- 内容 --}}
    @include('pet-skills._list', ['petSkills' => $petSkills])

    {{-- 分页 --}}
    @include('shared._page', ['items' => $petSkills])
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('pet-skills._sidebar')
  </div>
</div>

@endsection

@section('scripts')
<script>
  masonry('.masonry', 3, 3, 2, 2);

</script>
@endsection
