{{-- Select * from posts where id= --}}
@extends('layouts.mylayout')
@section('content')
    <div class="container">
        <h1>{{ $activity->name }}</h1>
        <p>{{ $activity->description }}</p>
        <p>{{ $activity->trip_id }}</p>
        <small> Created at: {{ $activity->created_at }}</small> <br>
        <small> Updated at: {{ $activity->updated_at }}</small>
    </div>
@endsection