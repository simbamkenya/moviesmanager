@extends('layouts.default')
@section('content')

<h1>single movie</h1>

    {{$movie->movieTitle}}<br/>
    {{$movie->description}}<br/>
    {{$movie->releaseDate}}<br/>
    

@stop