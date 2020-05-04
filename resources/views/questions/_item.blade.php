<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <span class="badge badge-success">{{$question->category}}</span>
    </div>
    <div class="list-group-item">
      问题: {{ $question->question }}
    </div>
    <div class="list-group-item">
      答案: {{ $question->answer }}
    </div>
  </div>
</div>
