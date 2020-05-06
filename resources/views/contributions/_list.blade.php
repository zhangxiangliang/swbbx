<div class="masonry">
  @foreach ($contributions as $contribution)
  @include('contributions._item', ['contribution' => $contribution])
  @endforeach
</div>
