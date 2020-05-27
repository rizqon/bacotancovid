<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        dd($posts);

        return view('homepage', compact('posts'));
    }
}
