<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>{{ $item->name }}</div>
        <a href="{{route('items.show', ['item' => $item->id])}}" class="badge badge-success ">查看</a>
      </div>
    </div>

    <div class="list-group-item">
      <div>说明: {{$item->description ? $item->description : '无'}}</div>
    </div>
    <div class="list-group-item">
      <div>作用: {{$item->use ? $item->use : '无'}}</div>
    </div>
    @if(count($item->maps))
    <div class="list-group-item">
      <div>出处</div>
      @foreach($item->maps as $map)
      <div class="badge badge-secondary">{{$map}}</div>
      @endforeach
    </div>
    @endif
    @if(count($item->produces))
    <div class="list-group-item">
      <div>集合</div>
      @foreach($item->produces as $produce)
      <a href="{{route('produces.show', ['produce' => $produce->id])}}"
        class="badge badge-success">{{$produce->name}}</a>
      @endforeach
    </div>
    @endif
  </div>
</div>
