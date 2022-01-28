@extends('layouts.mylayout')

@section('content')
<div class="container">
    @if (count($Hotels) > 0)
    <h1>Our Hotels: </h1>
    <ul class="list-group">
        @foreach ($Hotels as $Hotel)
                    <div class="col-10">
                        <li style="display:flex" class="list-group-item">
                            <div>
                                <img style="width:150px ; height:150px" src="/images/{{ $Hotel->image}}" alt="hey">
                            </div>
                            <div style="margin-left : 20px">
                            <h3><a href="/home/hotels/{{$Hotel->id}}">{{$Hotel->name}}</a></h3>
                            <p>{{$Hotel->stars}} <span class="fas fa-star"></span></p>
                            <p>{{$Hotel->place}}</p>
                            <p>{{$Hotel->price}} dh</p>
                            <p>from {{$Hotel->booking_date}} to {{$Hotel->leaving_date}}</p>
                          </div></li>
                   
                    </div><br>
        @endforeach
        </ul>
    @endif
    @endsection