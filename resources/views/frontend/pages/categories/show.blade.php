@extends('frontend.layouts.master')

@section('main-content')
    <div>
        <h2>{{ $category->name }}</h2>
        @foreach ($category->posts as $post)
            <h2>
                {{ $post->title }}
            </h2>
            <div>
                <mark>{{ $post->category->name }}</mark>
                <br>
                {!! $post->description !!}
            </div>
            <hr>
        @endforeach
    </div>
@endsection
