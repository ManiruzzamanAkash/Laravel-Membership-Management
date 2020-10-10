<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class PagesController extends Controller
{
    public function posts()
    {
        // Single Data In Controller
        // $name = "Akash";
        // $age = 26;
        
        // return 'Name: '. $name .' Age: '.$age;

        // Object
        // $user = new stdClass();
        // $user->name = "Akash";
        // $user->age = 26;
        // $user->gender = 'Male';
        // print_r($user);

        
        // Multiple Data / Array
        $posts = [];
        $singlePost = new stdClass();
        $singlePost->name = "Akash";
        $singlePost->age = 26;
        $singlePost->gender = 'Male';
        
        // [
        //     'id' => 1,
        //     'title' => 'Simple Title',
        //     'total_view' => 100,
        // ];
        array_push($posts, $singlePost);

        $singlePost = new stdClass();
        $singlePost->name = "Mabrur";
        $singlePost->age = 41;
        $singlePost->gender = 'Male';
        array_push($posts, $singlePost);

        print_r($posts);
    }

    public function postsView()
    {
        // Single Data In Controller
        // $name = "Akash 2";
        // $age = 26;
        
        // return view('posts', compact('name', 'age'));
        // return view('posts')->withName($name32323)->withAge($age);

        
        // $user = new stdClass();
        // $user->name = "Akash";
        // $user->age = 26;
        // $user->gender = 'Male';
        // return view('posts', compact('user'));

        $posts = [];
        $singlePost = new stdClass();
        $singlePost->id = 1;
        $singlePost->title = "Simple Post 1";
        $singlePost->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $singlePost->total_view = 20;
        array_push($posts, $singlePost);

        $singlePost = new stdClass();
        $singlePost->id = 2;
        $singlePost->title = "Simple Post 2";
        $singlePost->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $singlePost->total_view = 100;
        array_push($posts, $singlePost);


        $singlePost = new stdClass();
        $singlePost->id = 3;
        $singlePost->title = "Simple Post 3";
        $singlePost->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $singlePost->total_view = 200;
        array_push($posts, $singlePost);

        return view('posts', compact('posts'));

    }

    public function show($id)
    {
        $post = new stdClass();
        $post->id = $id;
        $post->title = "Simple Post 1";
        $post->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!<br />Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $post->total_view = 20;
        return view('post-single', compact('post'));
    }
}


