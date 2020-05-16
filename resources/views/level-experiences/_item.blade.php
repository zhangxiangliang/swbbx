<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>当前等级: {{$level->level}} 级</div>
        @if($level->sort >= 130)
        <div class="badge badge-success ">飞升</div>
        @endif
      </div>
    </div>
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>目标等级: {{$level->level+1}} 级</div>
        @if($level->sort+1 >= 130)
        <div class="badge badge-success">飞升</div>
        @endif
      </div>
    </div>
    <div class="list-group-item">
      <div>所需经验: {{$level->experience}}</div>
    </div>
  </div>
</div>
