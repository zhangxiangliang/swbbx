@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($questions as $question)
  @include('questions._item', ['question' => $question])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($questions as $question)
  @include('questions._item', ['question' => $question])
  @endforeach
</div>
@endif
