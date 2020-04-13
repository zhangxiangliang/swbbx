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
    神武百宝箱
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">神武百宝箱提供了奇遇秘籍、江湖恩仇录科举答题器、经验计算、模拟打书、属性计算、成长计算等工具，只为与少侠一起闯荡神武。</li>
  </ul>
  <div class="card-body">
    <a href="{{ route('topics.create') }}" class="btn btn-success btn-block">
      新建帖子
    </a>
  </div>
</div>
@endif

@include('shared._platform')
