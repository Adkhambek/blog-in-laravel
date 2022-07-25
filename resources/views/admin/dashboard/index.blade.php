@extends('layouts.admin')

@section('title', 'Dashboard page');

@section('content')
    <x-admin.aside page="dashboard"/>
    <main class="main dashboard">
        <x-admin.header/>
        <x-success-message/>
        <section class="main-box">
            <h1>Dashboard</h1>
            <div class="statistics">
                <ul class="list">
                    <li class="item">
                        <span class="fas fa-blog"></span>
                        <p class="text">{{$posts}} {{($posts !== 1 && $posts !== 0) ? 'posts' : 'post'}}</p>
                    </li>
                    <li class="item">
                        <span class="fas fa-folder"></span>
                        <p class="text">{{$categories}} {{($categories !== 1 && $categories !== 0) ? 'categories' : 'category'}}</p>
                    </li>
                    <li class="item">
                        <span class="fas fa-eye"></span>
                        <p class="text">{{$views}} page views</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection


