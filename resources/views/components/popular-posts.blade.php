@props(['posts'])

<section class="popular-posts">
    <div class="container">
        <h1 class="visually hidden">Popular posts</h1>
        <ul class="post-list">
            @foreach($posts as $post)
            <li class="post-item">
                <a href="/posts/{{$post->slug}}" class="post-image-link">
                    <img src="/storage/{{$post->image}}" alt="{{$post->title}}" class="post-image">
                </a>
                <a href="/posts/{{$post->slug}}" class="post-title-link">
                    <h2 class="post-title">{{$post->title}}</h2>
                </a>
            </li>
            @endforeach

        </ul>
    </div>
</section>
