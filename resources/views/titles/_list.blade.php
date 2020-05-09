@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($titles as $title)
  @include('titles._item', ['title' => $title])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($titles as $title)
  @include('titles._item', ['title' => $title])
  @endforeach
</div>
@endif
