@extends('layouts.main')

@section('content')
  @if(Session::has('info'))
  <div class="row">
    <div class="col-md-12">
      <p class="alert alert-info"> {{ Session::get('info') }} </p>
    </div>
  </div>
  @endif

  <div class="row">
    <div class="col-md-12">
      <p class="quote"> Admin </p>
    </div>
  </div>

  <a href="{{ route('admin.create') }}">
    <button class="btn btn-primary"> Create new blog </button>
  </a>

  @foreach($posts as $post)
  <div class="row">
    <div class="col-md-12">
      <h1 class="post-title"> {{ $post['title'] }} </h1>
      <a href="{{ route('admin.edit', ['id' => array_search($post, $posts)]) }}"> Edit </a>
    </div>
  </div>
  @endforeach
@endsection
