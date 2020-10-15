<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts | Membership Management</title>
        <style>
            .form{
                padding: 5%;
                border: 1px solid #eee;
            }
        </style>
    </head>
    <body>
        <h2>Posts</h2>


        <form action="{{ route('posts.store') }}" method="POST" class="form">
            @csrf 
            <label>Title</label> <br />
            <input type="text" name="title" placeholder="Title"/> <br />

            <label>Description</label> <br />
            <textarea name="description" placeholder="Description" cols="90" rows="5"></textarea> <br />

            <button type="submit">Submit</button>
        </form>


        @foreach ($posts as $post)
            <h2>{{ $post->title }}</h2>
            <div>
                {!! $post->description !!}
            </div>
            <a href="{{ route('posts.show', $post->slug) }}">View More...</a>

        @endforeach
    </body>
</html>
