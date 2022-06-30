@extends('layouts/app')

@section('main-content')
    <div class="container">
        <ul>
            <li class="list-unstyled">
                <h1>{{ $comic->title }}</h1>
            </li>
            <li class="list-unstyled">
                <img src="{{ $comic['thumb'] }}" alt="">
            </li>
            <li class="list-unstyled">
                <h4>Price: {{ $comic->price }}$</h4>
            </li>
            <li class="list-unstyled">
                <h4>{{ $comic->series }}</h4>
            </li>
            <li class="list-unstyled">
                <h4>Sale date:{{ $comic->sale_date }}</h4>
            </li>
            <li class="list-unstyled">
                <h4>Type: {{ $comic->type }}</h4>
            </li>
            <li class="list-unstyled">
                <p>{{ $comic->description }}</p>
            </li>
        </ul>
    </div>
@endsection
