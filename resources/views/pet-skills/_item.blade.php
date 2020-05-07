<div class="card">
  <div class="list-group list-group-flush">
    <div class="list-group-item">
      <div class="row d-flex align-items-center justify-content-between">
        <div class="col-3 px-1">
          <img class="img-fluid rounded-circle" src="{{$petSkill->cover}}">
        </div>
        <div>
          <div class="badge badge-secondary">{{ $petSkill->name }}</div>
          <a href="{{route('pet-skills.index', ['search' => $petSkill->category ])}}"
            class="badge badge-success">{{ $petSkill->category }}</a>
        </div>
      </div>
    </div>
    <div class="list-group-item">
      描述: {{ $petSkill->description }}
    </div>
  </div>
</div>
