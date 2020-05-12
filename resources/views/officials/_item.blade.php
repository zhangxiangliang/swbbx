<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div>{{$official->name}}</div>
    </div>
    <div class="list-group-item">
      等级: {{ $official->level->level }}
    </div>
    <div class="list-group-item">
      威望值: {{ $official->experience }}
    </div>
  </div>
</div>
