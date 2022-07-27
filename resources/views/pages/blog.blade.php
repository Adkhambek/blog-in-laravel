@extends('layouts.app')

@section('title', 'blog site')
@section('description', 'blog description')
@section('url', 'https://blog.uz')
@section('imageUrl', 'https://blog.uz/logo.png')
@section('siteName', 'mynewblog')
@section('nextPage')
    <link rel="next" href="https://blog.uz/page/2" />
@endsection

@section('content')
    <x-top-post :post="$latest_post"/>
    <x-popular-posts :posts="$popular_posts"/>
    <main class="main">
        <div class="container">
            <section class="blog">
                <h1 class="blog-title visually-hidden">The most recent blog posts</h1>
                @foreach($posts as $post)
                <article class="blog-post">
                    <a href="/posts/{{$post->slug}}" class="image-link">
                        <img src="/storage/{{$post->image}}" class="post-image" alt="{{$post->title}}">
                    </a>
                    <div class="post-container">
                        <a href="/posts/{{$post->slug}}" class="title-link">
                            <h2 class="post-title">{{$post->title}}</h2>
                        </a>
                        <p class="post-description">{!! $post->excerpt !!}</p>
                        <a href="/posts/{{$post->slug}}" class="post-link btn">read more</a>
                    </div>
                </article>
                @endforeach
                {{$posts->links('vendor.pagination.custom')}}
            </section>
            <x-aside/>
        </div>
    </main>

@endsection


