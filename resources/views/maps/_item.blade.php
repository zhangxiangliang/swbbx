<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>{{ $map->name }}</div>

        <a href="{{route('maps.show', ['map' => $map->id])}}" class="badge badge-success">查看</a>
      </div>
    </div>
    @if($map->intro)
    <div class="list-group-item">
      简介: {{ $map->intro }}
    </div>
    @endif
    @if($map->description)
    <div class="list-group-item">
      描述: {{ $map->description }}
    </div>
    @endif
  </div>
</div>
