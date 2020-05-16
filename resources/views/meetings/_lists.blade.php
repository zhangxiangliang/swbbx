@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($meetings as $meeting)
  @include('meetings._item', ['meeting' => $meeting])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($meetings as $meeting)
  @include('meetings._item', ['meeting' => $meeting])
  @endforeach
</div>
@endif
