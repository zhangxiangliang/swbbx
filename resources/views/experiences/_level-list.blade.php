@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($levels as $level)
  @include('experiences._level-item', ['level' => $level])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($levels as $level)
  @include('experiences._level-item', ['level' => $level])
  @endforeach
</div>
@endif
