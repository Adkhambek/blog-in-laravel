<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    public function index()
    {
        return view('admin.image.index', ['images'=> Image::all()]);
    }

    public function create()
    {
        return view('admin.image.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate( [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'title' => 'required|max:255'
        ]);

        $attributes['image'] = $request->file('image')->store('images');

        Image::create($attributes);
        return back()->with('success', 'A new image has been created successfully');
    }

    public function edit(Image $image)
    {
        return view('admin.image.edit', ['image' => $image]);
    }

    public function update(Request $request, Image $image)
    {
        $attributes = $request->validate( [
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'title' => 'required|max:255'
        ]);

        if(isset($attributes['image'])) {
            $image_path = public_path() . "/storage/" . $image['image'];
            unlink($image_path);
            $attributes['image'] = $request->file('image')->store('images');
        }

        $image->update($attributes);
        return back()->with('success', 'The image has been updated successfully');
    }

    public function destroy(Image $image)
    {
        $image_path = public_path() . "/storage/" . $image['image'];
        unlink($image_path);
        $image->delete();

        return back()->with('success', 'The image has been deleted successfully');
    }
}
