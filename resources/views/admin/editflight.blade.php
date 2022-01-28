@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Edit flight {{ $myflight->cp_name }}</h1>
        {{-- {!! Form::open(['route' =>('editfflight', $myflight->id), 'method'=>'POST']) !!}  --}}
        {{ Form::open(array('route' => array('editfflight', $myflight->id))) }}
            <div class="form-group">
                {{Form::label('cp_name', 'cp_name')}}
                {{Form::text('cp_name', '', ['class' => 'form-control', 'placeholder' => 'cp_name'])}}
            </div>
            <div class="form-group">
                {{Form::label('from', 'from')}}
                {{Form::text('from', '', ['class' => 'form-control', 'placeholder' => 'from'])}}
            </div>
            <div class="form-group">
                {{Form::label('to', 'to')}}
                {{Form::text('to', '', ['class' => 'form-control', 'placeholder' => 'to'])}}
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
                {{Form::label('capacity', 'capacity')}}
                {{Form::number('capacity', '', ['class' => 'form-control', 'placeholder' => 'capacity'])}}
            </div>
            <div class="form-group">
                {{Form::label('depart_time', 'depart_time')}}
                {{Form::date('depart_time', '', ['class' => 'form-control', 'placeholder' => 'depart_time'])}}
            </div>
            <div class="form-group">
                {{Form::label('return', 'return')}}
                {{Form::date('return', '', ['class' => 'form-control', 'placeholder' => 'return'])}}
            </div>
            {{Form::submit('Edit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection