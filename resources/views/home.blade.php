@extends('layout')

@section('title', 'News')

@section('content')
    <!-- News List -->
    <div class="container my-5">
        <h2>Latest News</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($allNews as $news)
                <div class="col">
                    <div class="card news-card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $news->title }}</h5>
                            <p class="card-text">{{ $news->body }}</p>
                            <a href="{{ route('news-show', ['newsId' => $news->id]) }}" class="btn btn-primary">Access</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
