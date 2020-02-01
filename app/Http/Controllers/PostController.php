<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function getPost() {
        $posts = Post::all();
        return view('post',compact('posts'));
    }
}
