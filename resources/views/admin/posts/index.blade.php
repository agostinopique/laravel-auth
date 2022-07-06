@extends('layouts.app')

@section('content')
<div class="container d-flex flex-wrap justify-content-center">

        @foreach($posts as $post)

        <div class="card flex-shrink-0 m-3 " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $post->description }}</h6>
                <a href="{{ route('admin.post.show', $post) }}" class="card-link">Show</a>
                <a href="#" class="card-link">Edit</a>
                <a href="#" class="card-link">Delete</a>
            </div>
        </div>

        @endforeach

</div>
@endsection
