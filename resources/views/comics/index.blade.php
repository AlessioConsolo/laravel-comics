@extends('layouts.app')

@section('title', 'Lista dei Fumetti')

@section('content')
    <ul>
        @foreach ($comics as $comic)
            <li>
                <h3>{{ $comic['title'] }}</h3>
                <p>{{ $comic['description'] }}</p>
                <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
            </li>
        @endforeach
    </ul>
@endsection
