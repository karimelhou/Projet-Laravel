@extends('layouts.mylayout')

@section('content')
<div class="container">
    @if (count($activities) > 0)
    <h1>Our Activities: </h1>
    <ul class="list-group">
        @foreach ($activities as $activitie)
                    <div class="col-10">
                        <li style="display:flex" class="list-group-item">
                            <div>
                                <img style="width:150px ; height:150px" src="/images/{{ $activitie->image}}" alt="hey">
                            </div>
                            <div style="margin-left:20px">
                            <h3><a href="/home/activities/{{$activitie->id}}">{{$activitie->name}}</a></h3><p>{{$activitie->capacity}}description</p>
                            <p>{{$activitie->price}} dh</p>
                            <p>{{$activitie->date}}</p>
                             <small>Written on {{$activitie->created_at}} </small></div>
                    </li> <br>
                    </div>
        @endforeach
        </ul>
    @endif

    </div>
    @endsection