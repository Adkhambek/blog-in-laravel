<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', ['categories'=> Category::orderBy('id', 'desc')->get()]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:255'
        ]);

        if($validator->fails()){
            $error = $validator->errors()->first();
            return back()->with('error', $error);
        }

        $slug = (string)Str::of($request['name'])->slug('-');
        Category::create([
            'name' => $request['name'],
            'slug' => $slug
        ]);
        return back()->with('success', 'A new category has been created successfully');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        if($validator->fails()){
            $error = $validator->errors()->first();
            return back()->with('error', $error);
        }

        $slug = (string)Str::of($request['name'])->slug('-');
        $category->update([
            'name' => $request['name'],
            'slug' => $slug
        ]);
        return back()->with('success', 'The category has been updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', 'The category has been deleted successfully');
    }
}
