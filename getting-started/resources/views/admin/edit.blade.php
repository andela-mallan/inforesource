@extends('layouts.main')

@section('content')
  @include('partials.errors')
  <div class="row">
    <div class="col-md-12">
      <p class="quote">  Edit Blog Post </p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('admin.create') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
          <label for="title"> Title </label>
          <input type="text" id="title" name="title" class="form-control" value="{{ $post['title'] }}"/>
        </div>
        <div class="form-group">
          <label for="content"> Content </label>
          <textarea id="content" name="content" class="form-control"> {{ $post['content'] }}</textarea>
        </div>
        <input type="hidden" name="id" value="$post_id" />
        <button type="submit" class="btn btn-primary"> Submit </button>
      </form>
    </div>
  </div>
@endsection
