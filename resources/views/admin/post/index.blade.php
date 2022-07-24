@extends('layouts.admin')

@section('stylesheets')
    <link rel="stylesheet" href="/css/themes/datatable/datatables.min.css" />
@endsection

@section('content')
    <x-admin.aside page="post"/>
    <main class="main">
        <x-admin.header/>
        <section class="main-box table-container">
            <header class="top-header">
                <h1>Posts</h1>
                <a href="/admin/posts/create" class="btn">New Post</a>
            </header>
            <x-success-message/>
            <x-error-message/>
            <table id="table" class="table display cell-border" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Views</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $i = 1
                @endphp
                @foreach($posts as $post)
                    <tr>
                        <td>{{$i}}</td>
                        <td>
                            <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}" />
                        </td>
                        <td>
                            <p>{{Str::limit($post->title,50)}}</p>
                        </td>
                        <td>
                            <p>{{$post->category->name}}</p>
                        </td>
                        <td>
                            <p>{{$post->views}}</p>
                        </td>
                        <td>
                            <div class="actions">
                                <form method="POST" action="/admin/posts/{{$post->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="delete"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                <a href="/admin/posts/{{$post->id}}/edit" class="edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++
                    @endphp
                @endforeach
                </tbody>
            </table>
        </section>
    </main>
    <script src="/js/themes/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/themes/datatable/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#table").DataTable({
                responsive: true
            });
        });
    </script>
@endsection
