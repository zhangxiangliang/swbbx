@extends('layouts.app')

@section('title', '科举答题器')

@section('content')

<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    @include('resources._mp-list', ['mps' => $mps])
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('questions._sidebar')
  </div>

</div>

@endsection

@section('scripts')
<script>
  masonry('.masonry', 3, 3, 2, 2);

</script>
@endsection
