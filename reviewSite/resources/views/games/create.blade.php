@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Game</h1>

        <form action="{{ route('games.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" name="genre" id="genre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="release_year">Release Year:</label>
                <input type="number" name="release_year" id="release_year" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Game</button>
        </form>
    </div>
@endsection