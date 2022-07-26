@props(['post'])

<section class="top-post">
    <div class="container">
        <a href="/posts/{{$post->slug}}" class="left-box">
            <img src="/storage/{{$post->image}}" alt="top-post">
        </a>
        <div class="right-box">
            <a href="/posts/{{$post->slug}}" class="title-link">
                <h1 class="title">{{$post->title}}</h1>
            </a>
            <p class="description">{!! $post->excerpt !!}</p>
            <a href="/posts/{{$post->slug}}" class="link-btn btn">read more</a>
        </div>
    </div>
</section>
