<div class="masonry">
  @foreach ($produces as $produce)
  @include('produces._item', ['produce' => $produce])
  @endforeach
</div>
