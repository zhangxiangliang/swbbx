<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>{{ $npc->name }}</div>
        <a href="{{route('npcs.show', ['npc' => $npc->id])}}" class="badge badge-success ">查看</a>
      </div>
    </div>
    <div class="list-group-item">
      {{$npc->description}}
    </div>
    <div class="list-group-item">
      <div>地图</div>
      <a href="{{route('maps.show', ['map' => $npc->map->id])}}" class="badge badge-success">{{ $npc->map->name }}</a>
    </div>
    <div class="list-group-item">
      <div>喜好</div>
      @foreach ($npc->favorites as $favorite)
      @if($favorite->name === '变身卡')
      <div class="badge badge-secondary">{{ $favorite->name }}</div>
      @elseif($favorite->name === '百花露')
      <div class="badge badge-secondary">{{ $favorite->name }}</div>
      @else
      <a href="{{route('produces.show', ['produce' => $favorite->id])}}"
        class="badge badge-success">{{ $favorite->name }}</a>
      @endif
      @endforeach
    </div>
    <div class="list-group-item">
      <div>好友</div>
      @foreach ($npc->friends as $friend)
      <a href="{{route('npcs.show', ['npc' => $friend->id])}}" class="badge badge-success ">{{ $friend->name }}</a>
      @endforeach
    </div>
  </div>
</div>
