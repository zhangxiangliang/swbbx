@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($maps as $map)
  @include('maps._item', ['map' => $map])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($maps as $map)
  @include('maps._item', ['map' => $map])
  @endforeach
</div>
@endif
