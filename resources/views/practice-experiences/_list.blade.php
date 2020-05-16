@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($practices as $practice)
  @include('practice-experiences._item', ['practice' => $practice])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($practices as $practice)
  @include('practice-experiences._item', ['practice' => $practice])
  @endforeach
</div>
@endif
