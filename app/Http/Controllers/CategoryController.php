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
        return view('admin.category.create');
    }

    public function editCategoryPage(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }

    public function createCategory(Request $req, Category $category){
        $validator = Validator::make($req->all(), [
            'name' => 'required|unique:categories|max:255'
        ]);

        if($validator->fails()){
            $error = $validator->errors()->first();
            return back()->with('error', $error);
        }

        $slug = (string)Str::of($req['name'])->slug('-');
        $category::create([
            'name' => $req['name'],
            'slug' => $slug
        ]);
        return back()->with('success', 'A new category has been created successfully');
    }

    public function editCategory(Request $req, Category $category)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|max:255'
        ]);

        if($validator->fails()){
            $error = $validator->errors()->first();
            return back()->with('error', $error);
        }

        $slug = (string)Str::of($req['name'])->slug('-');
        $category->update([
            'name' => $req['name'],
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
