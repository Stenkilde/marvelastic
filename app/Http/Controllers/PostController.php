<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {}

    /**
     * Show the guest view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $post = Post::find($id);
        return view('post.single', ['post' => $post]);   
    }
}
