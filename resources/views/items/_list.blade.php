@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($items as $item)
  @include('items._item', ['item' => $item])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($items as $item)
  @include('items._item', ['item' => $item])
  @endforeach
</div>
@endif
