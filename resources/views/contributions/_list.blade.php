@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($contributions as $contribution)
  @include('contributions._item', ['contribution' => $contribution])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($contributions as $contribution)
  @include('contributions._item', ['contribution' => $contribution])
  @endforeach
</div>
@endif
