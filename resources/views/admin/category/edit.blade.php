@extends('layouts.admin')

@section('content')
    <x-admin.aside page="category"/>
    <main class="main">
        <x-admin.header/>
        <section class="main-box">
            <header class="top-header">
                <h1>Edit Category</h1>
                <a href="/admin/categories" class="btn">
                    <i class="fas fa-arrow-left"></i>
                    Back</a>
            </header>
            <x-success-message/>
            <x-error-message/>
            <div class="form-box">
                <form action="/admin/categories/{{$category->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <label>
                        <p>Category name:</p>
                        <input
                            type="text"
                            name="name"
                            value="{{$category->name}}"
                            class="title"
                            placeholder="Category name..."
                            autocomplete="off"
                        />
                    </label>
                    <button type="submit" class="btn form-submit">Edit</button>
                </form>
            </div>
        </section>
    </main>
@endsection


