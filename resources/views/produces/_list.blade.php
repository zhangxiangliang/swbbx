@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($produces as $produce)
  @include('produces._item', ['produce' => $produce])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($produces as $produce)
  @include('produces._item', ['produce' => $produce])
  @endforeach
</div>
@endif
