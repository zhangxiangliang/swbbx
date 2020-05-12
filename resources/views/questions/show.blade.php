@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Question / Show #{{ $question->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('questions.index') }}">
                <- Back</a> </div> <div class="col-md-6">
                  <a class="btn btn-sm btn-warning float-right mt-1"
                    href="{{ route('questions.edit', $question->id) }}">
                    Edit
                  </a>
            </div>
          </div>
        </div>
        <br>

        <label>Category</label>
        <p>
          {{ $question->category }}
        </p>
        <label>Question</label>
        <p>
          {{ $question->question }}
        </p>
        <label>Answer</label>
        <p>
          {{ $question->answer }}
        </p>
      </div>
    </div>
  </div>
</div>

@endsection
