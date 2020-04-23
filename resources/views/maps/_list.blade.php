<div class="card-columns">
  @foreach ($maps as $map)
  @include('maps._item', ['map' => $map])
  @endforeach
</div>
