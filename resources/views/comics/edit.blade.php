@extends('layouts/app')

@section('main-content')
    <div class="container">
        <h1>Edit page:</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', ['comic' => $comic_edit->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title') ? old('title') : $comic_edit->title }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" id="thumb" rows="3" name="thumb"
                    value="{{ old('thumb') ? old('thumb') : $comic_edit->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" rows="3" name="price"
                    value="{{ old('price') ? old('price') : $comic_edit->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" rows="3" name="series"
                    value="{{ old('series') ? old('series') : $comic_edit->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" rows="3" name="sale_date"
                    value="{{ old('sale_date') ? old('sale_date') : $comic_edit->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" rows="3" name="type"
                    value="{{ old('type') ? old('type') : $comic_edit->type }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" rows="3" name="description"
                    value="{{ old('description') ? old('description') : $comic_edit->description }}"></input>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
