@extends('layouts.admin')

@section('title', 'Image page');

@section('stylesheets')
    <link rel="stylesheet" href="/css/themes/datatable/datatables.min.css" />
@endsection

@section('content')
    <x-admin.aside page="image"/>
    <main class="main">
        <x-admin.header/>
        <section class="main-box table-container">
            <header class="top-header">
                <h1>Images</h1>
                <a href="/admin/images/create" class="btn">New Image</a>
            </header>
            <x-success-message/>
            <x-error-message/>
            <table id="table" class="table display cell-border" style="width: 100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1
                @endphp
                @foreach($images as $image)
                    <tr>
                        <td>{{$i}}</td>
                        <td>
                            <img src="{{asset('storage/'.$image->image)}}" alt="{{$image->title}}" />
                        </td>
                        <td>
                            <p>{{$image->title}}</p>
                        </td>
                        <td>
                            <div class="actions">
                                <form method="POST" action="/admin/images/{{$image->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="delete"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                <a href="/admin/images/{{$image->id}}/edit" class="edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <input
                                    type="hidden"
                                    value="<img src='{{asset('/storage/' . $image->image)}}' alt='{{$image->title}}'>"
                                    class="hiddenInput"
                                />
                                <button type="button" class="copy">
                                    <i class="fas fa-clipboard" ></i>
                                </button>
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
                    { width: "10%", targets: 0 },
                    { width: "20%", targets: 1 },
                    { width: "60%", targets: 2 },
                ]
            });
        });
    </script>
@endsection
