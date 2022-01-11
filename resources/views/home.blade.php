@extends('layouts.app')


@section('content')
@forelse ($movies as $movie)
    <div class="movie">
        <div class="title">{{$movie -> title}}</div>
        <div class="original_title">{{$movie -> original_title}}</div>
        <div class="date">{{$movie -> date}}</div>
        <div class="vote">{{$movie -> vote}}</div>
    </div>
@empty
    
@endforelse
@endsection