@extends('layouts.default')
@section('content')

<h1>Add a  movie</h1>
 
 {{-- sample form i stole somewhere --}}
{{ Form::open(array('action'=>'moviesController@store', 'method'=>'POST')) }}
    //
    <div class="form-group">
        
        {{Form::label('movieTitle', 'movie title')}}
        {{Form::text('movieTitle', '', ['class'=>'form-control', 'placeholder'=>'Movie title'])}}

    </div>
{{ Form::close() }}


    {{-- this is my form but it is not working for no reason --}}
    {{-- {!!Form::open(['action'=>'moviesController@store', 'method'=>'POST'])!!}

    <div class="form-group">
        
        {{Form::label('movieTitle', 'movie title')}}
        {{Form::text('movieTitle', '', ['class'=>'form-control', 'placeholder'=>'Movie title'])}}

    </div>
    <div class="form-group">
        
        {{Form::label('description', 'Description')}}
        {{Form::textArea('description', '', ['class'=>'form-control', 'placeholder'=>'Movie description'])}}

    </div>
    <div class="form-group">
        
        {{Form::label('releasesDate', 'Releases Date')}}
        {{Form::text('releasesDate', '', ['class'=>'form-control', 'placeholder'=>'Releases Date'])}}

    </div>
    
    {{Form::submit('submit', 'class'=>'btn-btn-primary')}}

    {!! Form::close() !!} --}}

@stop