<div class="card">
  @if($contribution->contribution_name)
  <div class="card-header">
    <div class="d-flex align-items-center justify-content-between">
      <div>{{$contribution->contribution_name}}</div>
      @if($contribution->contribution_qrcode)
      <div class="badge badge-success" data-toggle="collapse" data-target="#{{$contribution->name}}">查看</div>
      @endif
    </div>
  </div>
  @endif
  <div class="list-group list-group-flush">
    @if($contribution->contribution_qrcode)
    <div class="list-group-item collapse" id="{{$contribution->name}}">
      <img src="{{$contribution->contribution_qrcode}}" class="card-img-top"
        alt="{{$contribution->contribution_name}}二维码">
    </div>
    @endif
    <div class="list-group-item">
      <div class="row d-flex align-items-center">
        <div class="col-2 px-1">
          <img class="img-fluid rounded-circle" src="{{$contribution->avatar}}">
        </div>
        <div class="col-9 px-2">
          <div>{{$contribution->name}}</div>
          <div>
            @if($contribution->name === '张小二')
            <div class="badge badge-secondary">站长</div>
            @endif
            @if($contribution->name === '神武')
            <div class="badge badge-secondary">官方</div>
            @endif
            @if($contribution->name === '钢背兽')
            <div class="badge badge-secondary">作者</div>
            @endif
            <div class="badge badge-secondary">威望 {{$contribution->contribution_score}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
