<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      {{$title->name}}
    </div>
    @if($title->npc)
    <div class="list-group-item">
      <a href="{{route('maps.show', $title->map->id)}}" class="badge badge-success">{{$title->map->name}}</a>
      <a href="{{route('npcs.show', $title->npc->id)}}" class="badge badge-success">{{$title->npc->name}}</a>
    </div>
    @endif
    <div class="list-group-item">
      描述: {{ $title->description }}
    </div>
  </div>
</div>
