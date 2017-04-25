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

  <div class="row">
    <div class="col-md-12">
      <h1 class="post-title"> Learning Laravel </h1>
      <p> This blog post will get you started with learning Laravel </p>
      <a href="{{ route('admin.edit', ['id' => 1]) }}"> Edit </a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h1 class="post-title"> Laravel 5.3 </h1>
      <p> Announcing the minor release of Laravel 5.3 </p>
      <a href="{{ route('admin.edit', ['id' => 2]) }}"> Edit </a>
    </div>
  </div>
@endsection
