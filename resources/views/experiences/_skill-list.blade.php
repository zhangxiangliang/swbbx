<div class="masonry">
  @foreach ($skills as $skill)
  @include('experiences._skill-item', ['skill' => $skill])
  @endforeach
</div>
