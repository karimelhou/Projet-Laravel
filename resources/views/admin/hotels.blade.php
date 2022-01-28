@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>This is my content</h1>
    <h1>Hotels: </h1>
    @if (count($Hotels) > 0)
    <ul class="list-group">
        @foreach ($Hotels as $Hotel)
                    <div class="col-10">
                        <li class="list-group-item">
                        <h3><a href="/admin/hotels/{{$Hotel->id}}">{{$Hotel->name}}</a></h3>
                        <a href="{{ url('/edithotel',$Hotel->id) }}"><button class="btn btn-success">modify</button></a>
                        <a href="{{ url('/deletehotel',$Hotel->id) }}"><button class="btn btn-danger">delete</button></a>
                    </div>
        @endforeach
        </ul>
    @endif
    <a href="{{route('hotel.create')}}"><button class="btn btn-primary">Add</button></a>
    </div>
@endsection