<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div>{{$title->name}}</div>
    </div>
    <div class="list-group-item">
      @if(count($title->tags))
      @foreach ($title->tags as $tag)
      <div class="badge badge-secondary">{{$tag}}</div>
      @endforeach
      @endif
      @if($title->npc)
      <a href="{{route('maps.show', $title->map->id)}}" class="badge badge-success">{{$title->map->name}}</a>
      <a href="{{route('npcs.show', $title->npc->id)}}" class="badge badge-success">{{$title->npc->name}}</a>
      @endif
    </div>
    <div class="list-group-item">
      说明: {{ $title->description }}
    </div>
  </div>
</div>
