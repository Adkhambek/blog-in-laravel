@extends('layouts.admin')

@section('title', 'Post update page');

@section('stylesheets')
    <link href="/css/themes/summernote/summernote-lite.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <x-admin.aside page="post"/>
    <main class="main">
        <x-admin.header/>
        <section class="main-box">
            <header class="top-header">
                <h1>Edit Post</h1>
                <a href="/admin/posts" class="btn">
                    <i class="fas fa-arrow-left"></i>
                    Back</a>
            </header>
            <x-success-message/>
            <div class="form-box">
                <form action="/admin/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <label>
                        <p>Title:</p>
                        <input
                            type="text"
                            name="title"
                            class="title"
                            value="{{$post->title}}"
                            placeholder="Post title..."
                            autocomplete="off"
                        />
                        @error('title')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </label>
                    <label>
                        <p>Category:</p>
                        <select name="category_id">
                            @foreach($categories as $category)
                                <option
                                    value="{{$category->id}}"
                                    {{$category->id == $post->category_id ? 'selected' : ''}}
                                    {{old('category_id') == $category->id ? 'selected' : ''}}
                                >{{ucwords($category->name)}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </label>
                    <label class="file">
                        <p>Image:</p>
                        <img src="{{asset('/storage/'.$post->image)}}" alt="{{$post->title}}" />
                        <input class="file-input" type="file" name="image"/>
                        <span class="file-custom"></span>
                        @error('image')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </label>
                    <label>
                        <p>Content:</p>
                        <textarea id="summernote" name="content" class="content">{{$post->content}}</textarea>
                        @error('content')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </label>
                    <button type="submit" class="btn form-submit">Edit</button>
                </form>
            </div>
        </section>
    </main>
    <script src="/js/themes/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/themes/summernote/summernote-lite.min.js"></script>
    <script>
        $("#summernote").summernote({
            tabsize: 2,
            height: 120,
            toolbar: [
                ["style", ["style"]],
                ["font", ["bold", "underline", "clear"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["table", ["table"]],
                ["insert", ["link", "picture", "video"]],
                ["view", ["fullscreen", "codeview", "help"]]
            ]
        });
    </script>
@endsection


