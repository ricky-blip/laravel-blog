<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Posts",
            //mengambil data posts dari function di model Post
            "posts" => Post::all(),
        ]);
    }

    public function show($slug){
        return view('post',[
            "title" => "Single Post",
            "post" => Post::find($slug),
        ]);
    }
}
