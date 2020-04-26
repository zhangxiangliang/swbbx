<div class="card-columns">
  @foreach ($skillsGroup as $skills)
  @include('skills._super-item', ['skills' => $skills])
  @endforeach
</div>
