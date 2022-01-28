{{-- Select * from posts where id= --}}
@extends('layouts.mylayout')
@section('content')
    <div class="container">
        <div class="col-10">
            <li style="display:flex" class="list-group-item">
                <div>
                    <img style="width:150px ; height:150px" src="/images/{{ $hotel->image}}" alt="hey">
                </div>
                <div style="margin-left : 20px">
                <h3><a href="/home/hotels/{{$hotel->id}}">{{$hotel->name}}</a></h3>
                <p>{{$hotel->stars}} <span class="fas fa-star"></span></p>
                <p>{{$hotel->place}}</p>
                <p>{{$hotel->price}} dh</p>
                <p>from {{$hotel->booking_date}} to {{$hotel->leaving_date}}</p>
        {!! Form::open(['route' =>'carts.store', 'method'=>'POST']) !!} 
        <input type="hidden" name="id" value="{{ $hotel->id }}">
        <input type="hidden" name="name" value="{{ $hotel->name }}">
        <input type="hidden" name="price" value="{{ $hotel->price }}">
        {{Form::submit('Add to cart', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!} </div><br>
    </div>
   
@endsection
