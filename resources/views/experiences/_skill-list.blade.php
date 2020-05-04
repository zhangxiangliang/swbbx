<div class="masonry-skills">
  @foreach ($skills as $skill)
  @include('experiences._skill-item', ['skill' => $skill])
  @endforeach
</div>
