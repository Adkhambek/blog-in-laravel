<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('pages.post', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
}