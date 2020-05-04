<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      {{$category}}
    </div>
    @foreach ($tools as $tool)
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <h5 class="mb-1">{{$tool->title}}</h5>
          <p class="mb-1">{{$tool->description}}</p>
        </div>
        @if($tool->route === '')
        <div class="badge badge-secondary d-block">开发中</div>
        @else
        <a href="{{$tool->route}}" class="badge badge-success d-block">查看</a>
        @endif
      </div>
    </div>
    @endforeach
  </div>
</div>
