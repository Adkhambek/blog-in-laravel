<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.post.index', ['posts'=> Post::orderBy('id', 'desc')->get()]);
    }

    public function create()
    {
        return view('admin.post.create', ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate( [
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'excerpt' => 'required|max:150',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $attributes['slug'] = (string)Str::of($attributes['title'])->slug('-');
        $attributes['image'] = $request->file('image')->store('images');

        Post::create($attributes);
        return back()->with('success', 'A new post has been created successfully');
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit', ['post' => $post, 'categories' => Category::all()]);
    }

    public function update(Request $request, Post $post)
    {
        $attributes = $request->validate( [
            'title' => 'required|max:255',
            'excerpt' => 'required|max:150',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);
        if($attributes['title'] !== $post['title']) {
            $attributes['slug'] = (string)Str::of($attributes['title'])->slug('-');
        }
        if(isset($attributes['image'])) {
            $image_path = public_path() . "/storage/" . $post['image'];
            unlink($image_path);
            $attributes['image'] = $request->file('image')->store('images');
        }

        $post->update($attributes);
        return back()->with('success', 'The post has been updated successfully');
    }

    public function destroy(Post $post)
    {
        $image_path = public_path() . "/storage/" . $post['image'];
        unlink($image_path);
        $post->delete();

        return back()->with('success', 'The post has been deleted successfully');
    }
}
