<div class="card">
  <div class="card-header">
    【公众号】{{$mp->mp_name}}
  </div>
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <img src="{{$mp->mp_qrcode}}" class="card-img-top" alt="{{$mp->mp_name}}的公众号二维码">
    </div>
    <div class="list-group-item">
      <div class="row d-flex align-items-center">
        <div class="col-2 px-1">
          <img class="img-fluid rounded-circle" src="{{$mp->avatar}}">
        </div>
        <div class="col-9 px-2">
          <div>{{$mp->name}}</div>
          <div>
            @if(in_array($mp->name, ['张小二', '神武', '钢背兽']))
            <div class="badge badge-success">作者</div>
            @endif
            <div class="badge badge-success">会员</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
