@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Create Hotels</h1>
        {!! Form::open(['route' =>'Hotels.store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!} 
            <div class="form-group">
                {{Form::label('name', 'name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
            </div>
            <div class="form-group">
                {{Form::label('place', 'place')}}
                {{Form::text('place', '', ['class' => 'form-control', 'placeholder' => 'place'])}}
            </div>
            <div class="form-group">
                {{Form::label('stars', 'stars')}}
                {{Form::number('stars', '', ['class' => 'form-control', 'placeholder' => 'stars'])}}
            </div>
           
            <div class="form-group">
                {{Form::label('trip_id', 'trip_id')}}
                {{Form::number('trip_id', '', ['class' => 'form-control', 'placeholder' => 'trip_id'])}}
            </div>

            <div class="form-group">
                {{Form::label('image', 'image')}}
                {{Form::file('image',Null, ['class' => 'form-control', 'placeholder' => 'image'])}}
            </div>

            <div class="form-group">
                {{Form::label('price', 'price')}}
                {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'price'])}}
            </div>
            <div class="form-group">
                {{Form::label('booking_date', 'booking date')}}
                {{Form::date('booking_date', '', ['class' => 'form-control', 'placeholder' => 'booking_date'])}}
            </div>
            <div class="form-group">
                {{Form::label('leaving_date', 'leaving date')}}
                {{Form::date('leaving_date', '', ['class' => 'form-control', 'placeholder' => 'leaving_date'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection