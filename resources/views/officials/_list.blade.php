@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($officials as $official)
  @include('officials._item', ['official' => $official])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($officials as $official)
  @include('officials._item', ['official' => $official])
  @endforeach
</div>
@endif
