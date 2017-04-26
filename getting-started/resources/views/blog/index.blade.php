@extends('layouts.main')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <p class="quote"> Laravel </p>
    </div>
  </div>

  @foreach($posts as $post)
  <div class="row">
    <div class="col-md-12">
      <h1 class="post-title"> {{ $post['title'] }} </h1>
      <p> {{ $post['content'] }} </p>
      <a href="{{ route('blog.post', ['id' => array_search($post, $posts)]) }}"> Read more </a>
    </div>
  </div>
  @endforeach

@endsection
