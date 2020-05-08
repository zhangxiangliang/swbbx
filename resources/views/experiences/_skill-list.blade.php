@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($skills as $skill)
  @include('experiences._skill-item', ['skill' => $skill])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($skills as $skill)
  @include('experiences._skill-item', ['skill' => $skill])
  @endforeach
</div>
@endif
