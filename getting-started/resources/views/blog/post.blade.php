@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-md-12">
    <p class="quote"> {{ $post['title'] }} </p>
    <div> {{ $post['content'] }} </div>
  </div>
</div>
@endsection
