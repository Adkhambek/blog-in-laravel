@extends('layouts.app')

@section('title', $post->title)
@section('description', strip_tags($post->excerpt))
@section('url', Request::url())
@section('imageUrl', asset('/storage/' . $post->image))
@section('siteName', config('app.name'))

@section('stylesheets')
    <link rel="stylesheet" href="/css/post.css">
@endsection

@section('content')
    <main class="main">
        <div class="container">
            <section class="post">
                <h1 class="title">{{$post->title}}</h1>
                <img src="/storage/{{$post->image}}" alt="{$post->title">
                <div class="content">
                    {!! $post->content !!}
                </div>
            </section>
            <x-aside/>
        </div>
    </main>
    <script src="/js/themes/prism/prism.js"></script>
@endsection
