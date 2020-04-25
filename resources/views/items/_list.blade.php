<div class="card-columns">
  @foreach ($items as $item)
  @include('items._item', ['item' => $item])
  @endforeach
</div>
