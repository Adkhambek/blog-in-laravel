@extends('layouts.admin')

@section('content')
    <x-admin.aside page="category"/>
    <main class="main">
        <x-admin.header/>
        <section class="main-box">
            <header class="top-header">
                <h1>Edit Image</h1>
                <a href="/admin/images" class="btn">
                    <i class="fas fa-arrow-left"></i>
                    Back</a>
            </header>
            <x-success-message/>
            <div class="form-box">
                <form action="/admin/images/{{$image->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <label>
                        <p>Title:</p>
                        <input
                            type="text"
                            name="title"
                            class="title"
                            value="{{$image->title}}"
                            placeholder="Image title..."
                            autocomplete="off"
                        />
                        @error('title')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </label>
                    <label class="file">
                        <p>Image:</p>
                        <img src="{{asset('/storage/'.$image->image)}}" alt="{{$image->title}}" />
                        <input class="file-input" type="file" name="image" />
                        <span class="file-custom"></span>
                        @error('image')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </label>
                    <button type="submit" class="btn form-submit">Edit</button>
                </form>
            </div>
        </section>
    </main>
@endsection


