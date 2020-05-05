<div class="masonry">
  @foreach ($mps as $mp)
  @include('resources._mp-item', ['mp' => $mp])
  @endforeach
</div>
