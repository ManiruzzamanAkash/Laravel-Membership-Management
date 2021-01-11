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
        return view('frontend.pages.index');
    }

    public function postShow($id)
    {
        return view('frontend.pages.posts.show');
    }

    public function categoriesShow($id)
    {
        return view('frontend.pages.categories.show');
    }
}
