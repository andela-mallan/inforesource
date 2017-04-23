@extends('layouts.main')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <h1> Some Content </h1>

      @if(true)
        <p>Displays if true</p>
      @else
        <p>Displays if false</p>
      @endif

      @for($i=1; $i<5; $i++)
        <p>{{ $i }} iteration</p>
      @endfor
    </div>
  </div>
@endsection
