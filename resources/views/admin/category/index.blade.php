@extends('layouts.admin')

@section('title', 'Category page')

@section('stylesheets')
    <link rel="stylesheet" href="/css/themes/datatable/datatables.min.css" />
@endsection

@section('content')
    <x-admin.aside page="category"/>
    <main class="main">
        <x-admin.header/>
        <section class="main-box table-container">
            <header class="top-header">
                <h1>Categories</h1>
                <a href="/admin/categories/create" class="btn">New Category</a>
            </header>
            <x-success-message/>
            <x-error-message/>
            <table id="table" class="table display cell-border" style="width: 100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1
                @endphp
                @foreach($categories as $category)
                    <tr>
                        <td>{{$i}}</td>
                        <td style="width: 100px">
                            <p class="category-name">{{$category->name}}</p>
                        </td>
                        <td>
                            <div class="actions">
                                <form method="POST" action="/admin/categories/{{$category->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="delete"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                <a href="/admin/categories/{{$category->id}}/edit" class="edit">
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
                responsive: true,
                columnDefs: [
                    { width: "20%", targets: 0 },
                    { width: "40%", targets: 1 }
                ]
            });
        });
    </script>
@endsection
