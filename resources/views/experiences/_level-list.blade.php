<div class="card-columns">
  @foreach ($levels as $level)
  @include('experiences._level-item', ['level' => $level])
  @endforeach
</div>
