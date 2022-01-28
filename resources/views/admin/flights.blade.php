@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>This is my content</h1>
    <h1>flights: </h1>
    @if (count($flights) > 0)
    <ul class="list-group">
        @foreach ($flights as $flight)
                    <div class="col-10">
                        <li class="list-group-item">
                        <h3><a href="/admin/flights/{{$flight->id}}">{{$flight->cp_name}}</a></h3>
                        <a href="{{ url('/editflight',$flight->id) }}"><button class="btn btn-success">modify</button></a>
                        <a href="{{ url('/deleteflight',$flight->id) }}"><button class="btn btn-danger">delete</button></a>
                    </div>
        @endforeach
        </ul>
    @endif
    <a href="{{route('flight.create')}}"><button class="btn btn-primary">Add</button></a>
    </div>
@endsection