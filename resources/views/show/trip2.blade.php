{{-- Select * from posts where id= --}}
@extends('layouts.mylayout')
@section('content')
    <div style="margin-left:35%" class="justify-content-center" class="container">
        <h1 style="margin-left:15%">{{ $trip->Title }}</h1>
        <p style="margin-right: 50%">{{ $trip->description }}</p>
    </div>
    <div class="container">
    @if (count($trip->Hotels) > 0)
    <h1>Hotels</h1>
    <ul class="list-group">
        @foreach ($trip->Hotels as $trip->Hotel)
                    <div class="col-5">
                        <li style="display:flex" class="list-group-item">
                            <div>
                                <img style="width:150px ; height:150px" src="/images/{{ $trip->Hotel->image}}" alt="hey">
                            </div>
                            <div style="margin-left:30px">
                        <h3><a href="/home/hotels/{{$trip->Hotel->id}}">{{$trip->Hotel->name}}</a></h3>
                        <p>{{$trip->Hotel->stars}}<span class="fas fa-star"></span></p>
                        <p>available from {{$trip->Hotel->booking_date}} to {{$trip->Hotel->leaving_date}}</p>
                        <small>added {{$trip->Hotel->created_at}} </small><br>
                        {!! Form::open(['route' =>'carts.store', 'method'=>'POST']) !!} 
                        <input type="hidden" name="id" value="{{ $trip->Hotel->id }}">
                        <input type="hidden" name="name" value="{{ $trip->Hotel->name }}">
                        <input type="hidden" name="price" value="{{ $trip->Hotel->price }}">
                        {{Form::submit('Add to cart', ['class'=>'btn btn-primary'])}}</div>
                    </li><br>
                        
                    </div><br>
        @endforeach
        </ul>
    @endif
        @if (count($trip->Flights) > 0)
        <h1>Flights</h1>
        <ul class="list-group">
            @foreach ($trip->Flights as $trip->Flight)
                        <div class="col-10">
                            <li class="list-group-item">
                            <h3><a href="/home/flights/{{$trip->Flight->id}}">{{$trip->Flight->cp_name}}</a></h3>
                            <small>Written on {{$trip->Flight->created_at}} </small><br>
                           </li><br>
                        </div>
            @endforeach
            </ul>
        @endif
        @if (count($trip->Activities) > 0)
        <h1>Activities</h1>
        <ul class="list-group">
            @foreach ($trip->Activities as $trip->Activitie)
                        <div class="col-10">
                            <li style="display:flex" class="list-group-item">
                                <div>
                                    <img style="width:150px ; height:150px" src="/images/{{ $trip->Activitie->image}}" alt="hey">
                                </div>
                            <div  style="margin-left:20px">
                            <h3><a href="/home/activities/{{$trip->Activitie->id}}">{{$trip->Activitie->name}}</a></h3>
                            <p>{{$trip->Activitie->description}}</p>
                            <p>{{$trip->Activitie->place}}</p>
                            <p>{{$trip->Activitie->price}} dh</p>
                            <small>Written on {{$trip->Activitie->created_at}} </small><br>
                            </div></li><br>
                        </div>
            @endforeach
            </ul>
        @endif
    </div>
@endsection