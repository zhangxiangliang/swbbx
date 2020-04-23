<div class="card-columns">
  @foreach ($skills as $skill)
  @include('skills._item', ['skill' => $skill])
  @endforeach
</div>
