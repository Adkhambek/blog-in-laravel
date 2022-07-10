@extends('layouts.admin')

@section('content')
    <x-admin.aside page="category"/>
    <main class="main">
        <x-admin.header/>
        <section class="main-box">
            <header class="top-header">
                <h1>New Category</h1>
                <a href="/admin/categories" class="btn">
                    <i class="fas fa-arrow-left"></i>
                    Back</a>
            </header>
{{--            <% if(successMessage.length) { %>--}}
{{--            <div class="alert alert-success" role="alert">--}}
{{--                <p><%= successMessage %></p>--}}
{{--                <button type="button" class="alert-close">--}}
{{--                    <span class="fas fa-times"></span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <%} else if(errorMessage.length) {%>--}}
{{--            <div class="alert alert-warning" role="alert">--}}
{{--                <p><%= errorMessage %></p>--}}
{{--                <button type="button" class="alert-close">--}}
{{--                    <span class="fas fa-times"></span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <%}%>--}}
            <div class="form-box">
                <form action="/admin/categories" method="POST">
                    <label>
                        <p>Category name:</p>
                        <input
                            type="text"
                            name="name"
                            class="title"
                            placeholder="Category name..."
                            autocomplete="off"
                        />
                    </label>
                    <button type="submit" class="btn form-submit">Publish</button>
                </form>
            </div>
        </section>
    </main>
@endsection

