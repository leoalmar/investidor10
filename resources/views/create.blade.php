@extends('layout')

@section('title', 'Create News')

@section('content')
    <div class="container my-5">
        <h2>Create News Article</h2>
        <form method="post" action="{{ route("news-store") }}">
            @CSRF
            <div class="mb-3">
                <label for="newsTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter news title">
            </div>
            <div class="mb-3">
                <label for="newsText" class="form-label">Text</label>
                <textarea class="form-control" id="body" name="body" rows="5" placeholder="Enter news text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
