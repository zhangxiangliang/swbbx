<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>当前等级: {{$skill->level}} 级</div>
        @if($skill->sort >= 135)
        <div class="badge badge-success ">飞升</div>
        @endif
      </div>
    </div>
    <div class="list-group-item">
      <div class="d-flex align-items-center justify-content-between">
        <div>目标等级: {{$skill->level+1}} 级</div>
        @if($skill->sort+1 >= 135)
        <div class="badge badge-success ">飞升</div>
        @endif
      </div>
    </div>
    <div class="list-group-item">
      <div>所需经验: {{$skill->experience}}</div>
    </div>
    <div class="list-group-item">
      <div>所需信誉: {{$skill->cost}}</div>
    </div>
  </div>
</div>
