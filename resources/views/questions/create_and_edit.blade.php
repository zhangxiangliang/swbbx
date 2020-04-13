@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Question /
          @if($question->id)
          Edit #{{ $question->id }}
          @else
          Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($question->id)
        <form action="{{ route('questions.update', $question->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
          @else
          <form action="{{ route('questions.store') }}" method="POST" accept-charset="UTF-8">
            @endif

            @include('common.error')

            <input type="hidden" name="_token" value="{{ csrf_token() }}">


            <div class="form-group">
              <label for="category-field">Category</label>
              <input class="form-control" type="text" name="category" id="category-field"
                value="{{ old('category', $question->category ) }}" />
            </div>

            <div class="form-group">
              <label for="question-field">Question</label>
              <input class="form-control" type="text" name="question" id="question-field"
                value="{{ old('question', $question->question ) }}" />
            </div>

            <div class="form-group">
              <label for="answer-field">Answer</label>
              <input class="form-control" type="text" name="answer" id="answer-field"
                value="{{ old('answer', $question->answer ) }}" />
            </div>


            <div class="well well-sm">
              <button type="submit" class="btn btn-primary">Save</button>
              <a class="btn btn-link float-xs-right" href="{{ route('questions.index') }}">
                <- Back</a> </div> </form> </div> </div> </div> </div> @endsection
