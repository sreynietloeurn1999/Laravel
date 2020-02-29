<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function getPost() {
        $posts = Post::all();
        dd($posts);
        return view('post',compact('posts'));
    }
}
