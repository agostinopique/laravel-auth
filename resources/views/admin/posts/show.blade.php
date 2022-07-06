@extends('layouts.app')

@section('content')

    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $post->content }}</h6>
                <a href="{{ route('admin.post.index') }}" class="card-link"><< Back</a>
                <a href="#" class="card-link">Edit</a>
                <a href="#" class="card-link">Delete</a>
            </div>
        </div>
    </div>

@endsection
