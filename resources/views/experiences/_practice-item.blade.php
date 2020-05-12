<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>当前等级: {{$practice->level}} 级</div>
        @if($practice->sort >= 130)
        <div class="badge badge-success ">飞升</div>
        @endif
      </div>
    </div>
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>目标等级: {{$practice->level + 1}} 级</div>
      </div>
    </div>
    <div class="list-group-item">
      <div>所需经验: {{$practice->experience}}</div>
    </div>
  </div>
</div>
