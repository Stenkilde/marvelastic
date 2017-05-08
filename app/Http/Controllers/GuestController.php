<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class GuestController extends Controller
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
    public function index()
    {
        $posts = Post::all();

        return view('home', ['posts' => $posts]);
    }
}
