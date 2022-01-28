@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Edit hotel {{ $myhotel->name }}</h1> 
        {{ Form::open(array('route' => array('edithhotel', $myhotel->id))) }}
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
                {{Form::text('image', '', ['class' => 'form-control', 'placeholder' => 'image'])}}
            </div>

            <div class="form-group">
                {{Form::label('price', 'price')}}
                {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'price'])}}
            </div>
            <div class="form-group">
                {{Form::label('godate', 'godate')}}
                {{Form::date('godate', '', ['class' => 'form-control', 'placeholder' => 'godate'])}}
            </div>
            <div class="form-group">
                {{Form::label('backdate', 'backdate')}}
                {{Form::date('backdate', '', ['class' => 'form-control', 'placeholder' => 'backdate'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection