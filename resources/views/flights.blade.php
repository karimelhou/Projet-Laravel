@extends('layouts.mylayout')

@section('content')
<div class="container">
    <h1>Our flights: </h1>
    @if (count($flights) > 0)
    <ul class="list-group">
        @foreach ($flights as $flight)
                    <div class="col-10">
                        <li class="list-group-item">
                        <h3><a href="/home/flights/{{$flight->id}}">{{$flight->cp_name}}</a></h3><p>{{$flight->capacity}}place</p>
                        <p>{{$flight->price}} dh</p>
                        <p>{{$flight->from}}</p><p>to {{$flight->to}}</p>
                        <small>Written on {{$flight->created_at}} </small></li><br>
                    </div>
        @endforeach
        </ul>
    @endif</div>
    @endsection