@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($practices as $practice)
  @include('experiences._practice-item', ['practice' => $practice])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($practices as $practice)
  @include('experiences._practice-item', ['practice' => $practice])
  @endforeach
</div>
@endif
