@extends('layouts/app')

@section('main-content')
    <h1>Comics List:</h1>
    <ul>
        @foreach ($comic_list as $comic)
            <li class="list-unstyled">
                <h3>
                    <a style="color: red;" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        {{ $comic->title }}
                    </a>
                </h3>
                <img src="{{ $comic['thumb'] }}" alt="">
                <h4>Price: {{ $comic->price }}$</h4>
                <h4>{{ $comic->series }}</h4>
                <h4>{{ $comic->sale_date }}</h4>
                <h4>{{ $comic->type }}</h4>
                <p>{{ $comic->description }}</p>
            </li>
        @endforeach
    </ul>
@endsection
