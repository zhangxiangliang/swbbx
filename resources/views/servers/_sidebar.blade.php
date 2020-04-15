@if (isset($category) && $category->name === '公告')
<div class="card card--color">
  <div class="card-header bg-transparent">
    公告
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">发布站点公告，记录版本信息</li>
  </ul>
</div>
@else
<div class="card card--color">
  <div class="card-header bg-transparent">
    服务器信息
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">收集神武服务器、等级上限、角色数量、合区信息等内容，只为更方便少侠选取自己喜欢的神武世界。</li>
  </ul>
  <div class="card-body">
    <a href="#" class="btn btn-success btn-block">
      创建服务器
    </a>
  </div>
</div>
@endif

@include('shared._platform')
