@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Games</h1>
        <ul>
            @foreach($games as $game)
                <li>
                    <a href="{{ route('games.show', $game->id) }}">{{ $game->title }}</a> 
                    ({{ $game->release_year }})
                </li>
            @endforeach
        </ul>
    </div>
@endsection