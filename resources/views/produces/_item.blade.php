<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>{{ $produce->name }}</div>
        <a href="{{route('produces.show', ['produce' => $produce->id])}}" class="badge badge-success ">查看</a>
      </div>
    </div>
    <div class="list-group-item">
      @if(!count($produce->items))
      <div class="badge badge-secondary">待补充</div>
      @endif
      @foreach ($produce->items as $item)
      <a href="{{route('items.show', ['item' => $item->id])}}" class="badge badge-success">{{ $item->name }}</a>
      @endforeach
    </div>
  </div>
</div>
