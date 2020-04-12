<div class="card">
  <div class="card-body">
    <a href="{{ route('topics.create') }}" class="btn btn-success btn-block">
      <i class="fas fa-pencil-alt mr-2"></i> 新建帖子
    </a>
  </div>
</div>

<div class="card mt-2">
  <div class="card-header">
    小程序二维码
  </div>
  <div class="m-2">
    <img class="card-img-top" src="{{config('app.url') . '/images/qrcode/miniapp.jpg'}}" alt="小程序二维码">
  </div>
</div>
