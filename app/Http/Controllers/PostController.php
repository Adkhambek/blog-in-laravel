<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(Post $post)
    {
        Cache::forget('popular_posts');
        $this->countPostView($post);
        return view('pages.post', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function countPostView($post)
    {
        $key = 'post' . $post->id;
        if(!Session::has($key)) {
            Session::put($key, 1);
            $post->incrementReadCount();
        }
    }
}
