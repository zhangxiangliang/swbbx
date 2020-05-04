<div class="masonry">
  @foreach ($questions as $question)
  @include('questions._item', ['question' => $question])
  @endforeach
</div>
