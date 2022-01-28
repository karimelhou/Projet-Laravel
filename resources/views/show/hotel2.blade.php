{{-- Select * from posts where id= --}}
@extends('layouts.admin')
@section('content')
    <div class="container">
        <small> Created at: {{ $hotel->created_at }}</small> <br>
        <small> Updated at: {{ $hotel->updated_at }}</small>
    </div>
@endsection
