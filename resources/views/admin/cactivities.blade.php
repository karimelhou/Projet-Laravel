@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Create activities</h1>
        {!! Form::open(['route' =>'Activities.store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!} 
            <div class="form-group">
                {{Form::label('name', 'name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'description')}}
                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'description'])}}
            </div>

            <div class="form-group">
                {{Form::label('place', 'place')}}
                {{Form::text('place', '', ['class' => 'form-control', 'placeholder' => 'place'])}}
            </div>

            <div class="form-group">
                {{Form::label('trip_id', 'trip_id')}}
                {{Form::number('trip_id', '', ['class' => 'form-control', 'placeholder' => 'trip_id'])}}
            </div>

            <div class="form-group">
                {{Form::label('price', 'price')}}
                {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'price'])}}
            </div>
            <div class="form-group">
                {{Form::label('time', 'time')}}
                {{Form::date('time', '', ['class' => 'form-control', 'placeholder' => 'time'])}}
            </div>
            <div class="form-group">
                {{Form::label('image', 'image')}}
                {{Form::file('image',Null, ['class' => 'form-control', 'placeholder' => 'image'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection