<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('frontend.pages.index', compact('posts'));
    }

    public function postShow($id)
    {
        $post = Post::find($id);
        return view('frontend.pages.posts.show', compact('post'));
    }

    public function categoriesShow($id)
    {
        $category = Category::find($id);
        return view('frontend.pages.categories.show', compact('category'));
    }
}
