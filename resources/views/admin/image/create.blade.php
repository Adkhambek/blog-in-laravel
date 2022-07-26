@extends('layouts.admin')

@section('title', 'Image create page')

@section('content')
    <x-admin.aside page="image"/>
    <main class="main">
        <x-admin.header/>
        <section class="main-box">
            <header class="top-header">
                <h1>New Image</h1>
                <a href="/admin/images" class="btn">
                    <i class="fas fa-arrow-left"></i>
                    Back</a>
            </header>
            <x-success-message/>
            <div class="form-box">
                <form action="/admin/images" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label>
                        <p>Title:</p>
                        <input
                            type="text"
                            name="title"
                            class="title"
                            value="{{old('title')}}"
                            placeholder="Image title..."
                            autocomplete="off"
                        />
                        @error('title')
                            <p class="error-message">{{$message}}</p>
                        @enderror
                    </label>
                    <label class="file">
                        <p>Image:</p>
                        <input class="file-input" type="file" name="image" />
                        <span class="file-custom"></span>
                        @error('image')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </label>
                    <button type="submit" class="btn form-submit">Publish</button>
                </form>
            </div>
        </section>
    </main>
@endsection

