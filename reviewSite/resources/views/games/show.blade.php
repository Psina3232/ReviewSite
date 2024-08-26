@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $game->title }}</h1>
        <p>Genre: {{ $game->genre }}</p>
        <p>Release Year: {{ $game->release_year }}</p>

        <h2>Reviews</h2>
        @if($game->reviews->isEmpty())
            <p>No reviews yet. Be the first to review!</p>
        @else
            <ul>
                @foreach($game->reviews as $review)
                    <li>
                        <strong>{{ $review->user->name }}:</strong> 
                        {{ $review->rating }}/10 
                        <p>{{ $review->review }}</p>
                    </li>
                @endforeach
            </ul>
        @endif

        @auth
            <h3>Add a Review</h3>
            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf
                <input type="hidden" name="game_id" value="{{ $game->id }}">
                <div class="form-group">
                    <label for="rating">Rating (1-10):</label>
                    <input type="number" name="rating" id="rating" class="form-control" min="1" max="10" required>
                </div>
                <div class="form-group">
                    <label for="review">Review:</label>
                    <textarea name="review" id="review" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>
        @endauth
    </div>
@endsection