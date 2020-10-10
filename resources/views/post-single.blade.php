<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Single Post</title>

        <style>
            .badge-count {
                background: #f9fb9c;
                padding: 5px;
                border-radius: 20px;
                font-size: 1rem;
            }
        </style>

    </head>
    <body>
        <h2>{{ $post->title }} <span class="badge-count">{{ $post->total_view }}</span></h2>
        <h4>Post ID - {{ $post->id }}</h4>
        <div>
            {!! $post->description !!}
        </div>
    </body>
</html>
