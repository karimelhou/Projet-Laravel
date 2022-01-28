@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1>Trips: </h1>
    @if (count($trips) > 0)
    <ul class="list-group">
        @foreach ($trips as $trip)
                    <div class="col-10">
                        <li class="list-group-item">
                        <h3><a href="/admin/trip/{{$trip->id}}">{{$trip->Title}}</a></h3>
                        <small>Written on {{$trip->created_at}} </small></li>
                    </div>
        @endforeach
        </ul>
    @endif
    <a href="{{route('admin.create')}}"><button class="btn btn-primary">Add Trips</button></a>

    </div>
@endsection