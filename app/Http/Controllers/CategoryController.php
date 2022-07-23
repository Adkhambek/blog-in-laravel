<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class CategoryController extends Controller
{
    public function createCategoryPage()
    {
        return view('admin/category/create');
    }

    public function createCategory(Request $req, Category $category){
        $validator = Validator::make($req->all(), [
            'name' => 'required|unique:categories|max:255'
        ]);

        if($validator->fails()){
            $error = $validator->errors()->first();
            session()->flash('error', $error);
            return redirect('/admin/categories/create');
        }

        $slug = (string)Str::of($req['name'])->slug('-');
        $category::create([
            'name' => $req['name'],
            'slug' => $slug
        ]);
        session()->flash('success', 'A new category has been created successfully');
        return redirect('/admin/categories/create');
    }
}
