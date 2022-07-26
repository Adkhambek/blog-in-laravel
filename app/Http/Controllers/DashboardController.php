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
            'views' => $this->intWithStyle(Post::sum('views'))
        ]);
    }

    public function intWithStyle($n)
    {
        if ($n < 1000) return $n;
        $suffix = ['','k','M','G','T','P','E','Z','Y'];
        $power = floor(log($n, 1000));
        return round($n/(1000**$power),1,PHP_ROUND_HALF_EVEN).$suffix[$power];
    }
}
