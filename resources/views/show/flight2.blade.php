{{-- Select * from posts where id= --}}
@extends('layouts.admin')
@section('content')
    <div class="container">
        <h3>{{$flight->cp_name}}</h3>
        <small> Created at: {{ $flight->created_at }}</small> <br>
        <small> Updated at: {{ $flight->updated_at }}</small>
    </div>
@endsection