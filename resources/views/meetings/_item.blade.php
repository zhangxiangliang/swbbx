<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>{{ $meeting->name }}</div>
      </div>
    </div>
    <div class="list-group-item">
      @if($meeting->levelExperience->level > 0)
      <a href="{{route('experiences.level')}}" class="badge badge-success">
        {{$meeting->levelExperience->level}} 级
      </a>
      @else
      <div class="badge badge-secondary">
        暂无等级要求
      </div>
      @endif
      @if($meeting->official)
      <a href="{{route('officials.index')}}" class="badge badge-success">
        {{$meeting->official->name}}
      </a>
      @else
      <div class="badge badge-secondary">
        暂无官职要求
      </div>
      @endif
      @foreach($meeting->maps as $map)
      <a href="{{route('maps.show', [$map->id])}}" class="badge badge-success">{{ $map->name }}
        {{ $map->pivot->x !== 0 && $map->pivot->y !== 0 ? "(". $map->pivot->x . ', ' . $map->pivot->y . ")" : '' }}
      </a>
      @endforeach
    </div>
    @if($meeting->description)
    <div class="list-group-item">
      描述: {{ $meeting->description }}
    </div>
    @endif
  </div>
</div>
