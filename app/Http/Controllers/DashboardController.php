<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'posts' => Post::count(),
            'categories' => Category::count(),
            'views' => 12
        ]);
    }
}
