@extends('frontend.layouts.master')

@section('main-content')
    <div>
        <h2>{{ $post->title }}</h2>
        {!! $post->description !!}
        <br>
        @foreach ($post->tags as $tag)
            <mark> {{ $tag->name }} </mark> |
        @endforeach
        <hr>

        <h4>Comments:</h4>
        @foreach ($post->comments as $comment)
            <p>{{ $comment->comment }} at {{ $comment->post->title }} by - {{ $comment->user->name }}</p>
            <p>at - {{ $comment->created_at->diffForHumans() }}</p>
            <br>
        @endforeach
    </div>
@endsection
