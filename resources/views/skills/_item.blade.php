<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>{{ $skill->name }}</div>
        {{-- @if(request()->is(('maps')))
        <a href="{{route('maps.show', ['map' => $map->id])}}" class="badge badge-success">查看</a>
        @endif --}}
      </div>
      @if($skill->map_id)
      <a href="#" class="badge badge-secondary">人物技能</a>
      <a href="#" class="badge badge-secondary">{{$skill->open_level}} 级开启</a>
      @endif
    </div>

    @if($skill->description)
    <div class="list-group-item">
      描述: {{ $skill->description }}
    </div>
    @endif
    @if($skill->cost)
    <div class="list-group-item">
      消耗: {{ $skill->cost }}
    </div>
    @endif
  </div>
</div>
