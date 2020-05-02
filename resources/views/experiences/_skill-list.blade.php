<div class="card-columns">
  @foreach ($skills as $skill)
  @include('experiences._skill-item', ['skill' => $skill])
  @endforeach
</div>
