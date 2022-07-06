@extends('layouts.app')

@section('content')
<div class="container">

    <ul>
        @foreach($posts as $post)

            <li>{{$post->title}}</li>
            <li>{{$post->description}}</li>

        @endforeach
    </ul>

</div>
@endsection
