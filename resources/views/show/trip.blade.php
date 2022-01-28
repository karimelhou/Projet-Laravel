{{-- Select * from posts where id= --}}
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $trip->Title }}</h1>
        <p>{{ $trip->description }}</p>
    <h1>Hotels</h1>
    @if (count($trip->Hotels) > 0)
    <ul class="list-group">
        @foreach ($trip->Hotels as $trip->Hotel)
                    <div class="col-10">
                        <li class="list-group-item">
                        <h3><a href="/admin/hotels/{{$trip->Hotel->id}}">{{$trip->Hotel->name}}</a></h3>
                        <p>{{$trip->Hotel->stars}}stars</p>
                        <small>Written on {{$trip->Hotel->created_at}} </small></li><br>
                    
                    </div>
        @endforeach
        </ul>
    @endif
    <h1>Flights</h1>
        @if (count($trip->Flights) > 0)
        <ul class="list-group">
            @foreach ($trip->Flights as $trip->Flight)
                        <div class="col-10">
                            <li class="list-group-item">
                            <h3><a href="/admin/flights/{{$trip->Flight->id}}">{{$trip->Flight->cp_name}}</a></h3>
                            <small>Written on {{$trip->Flight->created_at}} </small></li><br>
                        </div>
            @endforeach
            </ul>
        @endif
        <h1>Activities</h1>
        @if (count($trip->Activities) > 0)
        <ul class="list-group">
            @foreach ($trip->Activities as $trip->Activitie)
                        <div class="col-10">
                            <li class="list-group-item">
                            <h3><a href="/admin/activities/{{$trip->Activitie->id}}">{{$trip->Activitie->name}}</a></h3>
                            <small>Written on {{$trip->Activitie->created_at}} </small></li><br>
                        </div>
            @endforeach
            </ul>
        @endif
    </div>
@endsection