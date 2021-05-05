<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesControlller extends Controller
{
    public function index()
    {

        $posts = Post::with('user')->orderBy('updated_at', 'DESC')->take(5)->get();
        $latests = Post::with('user')->latest()->take(2)->get();
        return view('frontend.home.index', compact(['posts', 'latests']));
    }
}