@extends('layouts.app')


@section('content')
<div class="container">
    <div class="main_title">
        <h1>List Movie</h1>
    </div>
    <div class="movies_section">
       <div class="row">
            @forelse($movies as $movie)
                <div class="col-4">
                    <div class="movie_card">
                        <div class="text_movie">
                            <div class="title_movie">
                                <div class="title">{{$movie -> title}}</div>
                            </div>
                            <div class="original_title_movie">
                                <div class="original_title">{{$movie -> original_title}}</div>
                            </div>
                        </div>
                        <div class="info_movie">
                            <div class="date">{{$movie -> date}}</div>
                        </div>
                        <div class="rating">
                            <div class="vote">{{$movie -> vote}}</div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div> 
    </div>
    
</div>
{{--@forelse ($movies as $movie)
    <div class="movie">
        <div class="title">{{$movie -> title}}</div>
        <div class="original_title">{{$movie -> original_title}}</div>
        <div class="date">{{$movie -> date}}</div>
        <div class="vote">{{$movie -> vote}}</div>
    </div>
@empty
    
@endforelse--}}
@endsection