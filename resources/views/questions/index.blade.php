@extends('layouts.app')

@section('title', '科举答题器')

@section('content')

<div class="row mb-5">
  <div class="col-lg-9 col-md-9 topic-list">
    <div class="card">
      <div class="card-body bg-transparent">
        <div class="input-group">

          <input type="text" class="form-control" placeholder="输入需要查询的题目" aria-label="" aria-describedby="">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">搜索</button>
          </div>
        </div>

        {{-- <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="输入需要查询的题目" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
      </div>
    </div>

    <div class="card mt-2">
      <div class="card-body">
        <h6 class="border-bottom border-gray pb-2 mb-0">相关题目</h6>
        <div class="media py-2 border-bottom border-gray">
          <div class="media-body">
            <h5 class="mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
            fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>
        <div class="media py-2 border-bottom border-gray">
          <div class="media-body">
            <h5 class="mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
            fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('questions._sidebar')
  </div>
</div>

@endsection
