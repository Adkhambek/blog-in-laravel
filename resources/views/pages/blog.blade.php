@extends('layouts.app')

@section('title', 'blog site')
@section('description', config('constants.slogan'))
@section('url', config('app.url'))
@section('imageUrl', asset('/images/logo.png'))
@section('siteName', config('app.name'))
@section('nextPage')
    <link rel="next" href="{{config('app.url')}}/?page=2" />
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="/css/blog.css">
@endsection

@section('content')
    @if(!request('search') && !request('category'))
        <x-top-post :post="$latest_post"/>
        <x-popular-posts :posts="$popular_posts"/>
    @endif
    <main class="main">
        <div class="container">
            <section class="blog">
                @if ($posts->count())
                    @if(request('category'))
                        <h1>{{ucwords(request('category'))}}</h1>
                    @elseif(request('search'))
                        <h1>Search keys: "{{request('search')}}"</h1>
                    @else
                        <h1 class="blog-title visually-hidden">The most recent blog posts</h1>
                    @endif
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
                @else
                        <h1 class="blog-title">Oops! That page can't be found.</h1>
                        <p>It looks like nothing was found at this location.</p>
                @endif
                {{$posts->links('vendor.pagination.custom')}}
            </section>
            <x-aside/>
        </div>
    </main>

@endsection


