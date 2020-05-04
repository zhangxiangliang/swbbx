<div class="masonry">
  @foreach ($categories as $category => $tools)
  @include('tools._item')
  @endforeach
</div>
