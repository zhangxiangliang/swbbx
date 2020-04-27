<div class="card-columns">
  @foreach ($skillsGroup as $group => $skills)
  @include('skills._super-item', ['skills' => $skills, 'group' => $group])
  @endforeach
</div>
