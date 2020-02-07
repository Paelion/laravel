@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Tous les articles</h2>

        @forelse($posts as $post)
            <p><a href="{{route('posts.show', $post)}}">{{$post->title}}</a></p>
        @empty
            <p>Pas encore d'article</p>
        @endforelse
    </div>

@endsection
