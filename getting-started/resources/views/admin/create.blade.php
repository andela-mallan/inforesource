@extends('layouts.main')

@section('content')
  @include('partials.errors')
  <div class="row">
    <div class="col-md-12">
      <p class="quote"> Create Blog Post </p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('admin.create') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title"> Title </label>
          <input type="text" id="title" name="title" class="form-control" />
        </div>
        <div class="form-group">
          <label for="content"> Content </label>
          <textarea id="content" name="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"> Submit </button>
      </form>
    </div>
  </div>

@endsection
