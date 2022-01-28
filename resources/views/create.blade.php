{{-- Insert  --}}
{{-- Insert  --}}
@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Create Trip</h1>
        {!! Form::open(['route' =>'Trips.store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!} 
            <div class="form-group">
                {{Form::label('Title', 'Title')}}
                {{Form::text('Title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('price', 'price')}}
                {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'price'])}}
            </div>
            <div class="form-group">
                {{Form::label('capacity', 'capacity')}}
                {{Form::number('capacity', '', ['class' => 'form-control', 'placeholder' => 'capacity'])}}
            </div>
           
            <div class="form-group">
                {{Form::label('image', 'image')}}
                {{Form::file('image',Null, ['class' => 'form-control', 'placeholder' => 'image'])}}
            </div>

            <div class="form-group">
                {{Form::label('description', 'description')}}
                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'description'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection