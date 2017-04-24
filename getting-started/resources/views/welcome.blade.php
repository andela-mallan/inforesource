@extends('layouts.main')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <h1> Control Structures </h1>
      @if(true)
        <p>Displays if true</p>
      @else
        <p>Displays if false</p>
      @endif

      @for($i=1; $i<5; $i++)
        <p>{{ $i }} iteration</p>
      @endfor

      <h1> XSS </h1>
      {{ "<script>alert('Hello!');</script>" }}
      {!! "<script>alert('Hello!');</script>" !!}
    </div>
  </div>
@endsection
