@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($categories as $category => $tools)
  @include('tools._item')
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($categories as $category => $tools)
  @include('tools._item')
  @endforeach
</div>
@endif
