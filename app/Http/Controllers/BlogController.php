<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.blog',[
            'categories' => Category::all(),
            'latest_post' => Post::latest()->first(),
            'popular_posts' => Post::orderBy('views', 'desc')->limit(3)->get(),
            'posts' => Post::latest()->filter(
                request(['search', 'category'])
            )->paginate(5)->withQueryString()
        ]);
    }
}
