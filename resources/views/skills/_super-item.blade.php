<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div>
        {{$group}}
      </div>
      <a href="#" class="badge badge-secondary">人物技能</a>
      {{-- <a href="#" class="badge badge-secondary">{{$skills[0]->open_level}} 级开启</a> --}}
    </div>
    @foreach ($skills as $skill)
    <div class="list-group-item">
      <div>{{ $skill->name }}</div>
      <div>{{ $skill->description }}</div>
    </div>
    @endforeach
  </div>
</div>
