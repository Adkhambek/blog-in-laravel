<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Cache::rememberForever('categories', function() {
            return Category::select(['name', 'slug'])->get();
        });
        $latest_post = Cache::rememberForever('latest_post', function() {
            return Post::latest()->first();
        });
        $popular_posts = Cache::rememberForever('popular_posts', function() {
            return Post::orderBy('views', 'desc')->limit(3)->get();
        });
        return view('pages.blog',[
            'categories' => $categories,
            'latest_post' => $latest_post,
            'popular_posts' => $popular_posts,
            'posts' => Post::latest()->filter(
                request(['search', 'category'])
            )->paginate(5)->withQueryString()
        ]);
    }
}
