@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($skills as $skill)
  @include('skill-experiences._item', ['skill' => $skill])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($skills as $skill)
  @include('skill-experiences._item', ['skill' => $skill])
  @endforeach
</div>
@endif
