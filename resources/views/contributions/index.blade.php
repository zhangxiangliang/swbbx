@extends('layouts.app')

@section('title', '贡献榜单')

@section('content')
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    @include('contributions._list', ['contributions' => $contributions])
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('contributions._sidebar')
  </div>
</div>
@endsection

@section('scripts')
<script>
  $('.collapse').on('shown.bs.collapse', function (event) {
    masonry('.masonry', 3, 3, 2, 2);
  });

  $('.collapse').on('hidden.bs.collapse', function () {
    masonry('.masonry', 3, 3, 2, 2);
  })

</script>
@endsection
