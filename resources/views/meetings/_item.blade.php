<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>{{ $meeting->name }}</div>
        <a href="#" class="badge badge-secondary">
          标记
        </a>
      </div>
    </div>
    @if($meeting->levelExperience->level > 0 || $meeting->official || count($meeting->maps))
    <div class="list-group-item">
      @if($meeting->levelExperience->level > 0)
      <a href="{{route('experiences.level')}}" class="badge badge-success">
        {{$meeting->levelExperience->level}} 级
      </a>
      @endif
      @if($meeting->official)
      <a href="{{route('officials.index')}}" class="badge badge-success">
        {{$meeting->official->name}}
      </a>
      @endif
      @foreach($meeting->maps as $map)
      <a href="{{route('maps.show', [$map->id])}}" class="badge badge-success">{{ $map->name }}
        {{ $map->pivot->x !== 0 && $map->pivot->y !== 0 ? "(". $map->pivot->x . ', ' . $map->pivot->y . ")" : '' }}
      </a>
      @endforeach
    </div>
    @endif
    @if($meeting->description)
    <div class="list-group-item">
      描述: {{ $meeting->description }}
    </div>
    @endif
  </div>
</div>
