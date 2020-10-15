<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        // $posts = DB::table('posts')
        // ->select('title', 'description', 'id', 'slug')
        // ->get();

        return view('posts.index', compact('posts'));
    }


    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        // $post->slug = uniqid();
        $post->slug = Str::slug($request->title, '-');
        $post->save();
        return redirect()->route('posts.view');
    }
}
