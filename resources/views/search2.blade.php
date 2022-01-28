@extends('layouts.mylayout')

@section('content')
<div class="container">
  <h1>search results :</h1><br> 
  @if(isset($Hotels))
  <h2>Hotels available :</h2><br>
    <ul class="list-group">
              @if(count($Hotels) > 0)
                  @foreach($Hotels as $Hotel)
                  <div class="col-10">
                    <li class="list-group-item">
                    <h3><a href="/home/trip/{{$Hotel->id}}">{{$Hotel->name}}</a></h3>
                    <p>{{$Hotel->price}} dh</p>
                    <small>Written on {{$Hotel->created_at}} </small></li><br>
                </div>
                  @endforeach
              @else

                 <p>No Hotels are available</p><br>
              @endif
    </ul>
   
    @endif
    @if(isset($Destinations))
        <h2>Destinations available :</h2>
    <ul class="list-group">
              @if(count($Destinations) > 0)
                  @foreach($Destinations as $Destination)
                  <div class="col-10">
                    <li class="list-group-item">
                    <h3><a href="/home/trip/{{$Destination->id}}">{{$Destination->Title}}</a></h3>
                    <p>{{$Destination->price}} dh</p>
                    <small>Written on {{$Destination->created_at}} </small></li><br>
                </div>
                  @endforeach
              @else

                 <p>No Trips are found in this destination</p><br>
              @endif
    </ul>
    @endif
 
    @if(isset($Airlines))
    <h2>Airlines available :</h2>
    <ul class="list-group">
              @if(count($Airlines) > 0)
                  @foreach($Airlines as $Airline)
                  <div class="col-10">
                    <li class="list-group-item">
                    <h3><a href="/home/trip/{{$Airline->id}}">{{$Airline->cp_name}}</a></h3>
                    <p>{{$Airline->price}} dh</p>
                    <small>Written on {{$Airline->created_at}} </small></li><br>
                </div>
                  @endforeach
              @else

                 <p>No flight are available</p><br>
              @endif
    </ul>
    @endif
  </div>
    @endsection