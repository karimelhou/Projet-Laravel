@extends('layouts.mylayout')

@section('content')
<div class="container">
  <h1>search results :</h1><br> 
    @if(isset($Titles))
    <ul class="list-group">
              @if(count($Titles) > 0)
                  @foreach($Titles as $Title)
                  <div class="col-10">
                    <li class="list-group-item">
                    <h3><a href="/home/trip/{{$Title->id}}">{{$Title->Title}}</a></h3>
                    <p>{{$Title->price}} dh</p>
                    <small>Written on {{$Title->created_at}} </small></li><br>
                </div>
                  @endforeach
              @else

                 <p>No trips are found!</p><br>
              @endif
    </ul>
    @endif
  </div>
    @endsection