@extends('layout')

@section('title', 'Create News')

@section('content')
    <!-- News List -->
    <div class="container my-5">
        <h2>{{ $news->title }}</h2>
        <div class="my-5">{{ $news->body }}</div>
    </div>
@endsection
