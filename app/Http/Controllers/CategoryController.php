<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createCategoryPage()
    {
        return view('admin/category/create');
    }
}
