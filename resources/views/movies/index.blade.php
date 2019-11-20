@extends('layouts.default')
@section('content')

<h1>this is the main page guys</h1>




        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Movies Title</th>
                <th scope="col">Movies Description</th>
                <th scope="col">Movie Release Date</th>
            </tr>
            </thead>
         @foreach ($movies as $movie)    
            <tbody>
            <tr>
            <th scope="row">{{$movie->id}}</th>
                <td>{{$movie->movieTitle}}</td>
                <td>{{$movie->description}}</td>
                <td>{{$movie->releasesDate}}</td>
            </tr>
          @endforeach  
            
            </tbody>
        </table>
        
         

@stop
