@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>This is my content</h1>
    <h1>activities: </h1>
    @if (count($activities) > 0)
    <ul class="list-group">
        @foreach ($activities as $activitie)
                    <div class="col-10">
                        <li class="list-group-item">
                        <h3><a href="/admin/activities/{{$activitie->id}}">{{$activitie->name}}</a></h3>
                        <a href="{{ url('/editactivity',$activitie->id) }}"><button class="btn btn-success">modify</button></a>
                        <a href="{{ url('/deleteactivity',$activitie->id) }}"><button class="btn btn-danger">delete</button></a>
                    </div>
        @endforeach
        </ul>
    @endif
    <a href="{{route('activitie.create')}}"><button class="btn btn-primary">Add</button></a>
    </div>
@endsection