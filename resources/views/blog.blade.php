<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog site</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/blog.css">
    <meta property="title" content="<%= homePage.title %>"/>
    <meta property="og:title" content="<%= homePage.title %>"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<%= homePage.url %>" />
    <meta property="og:image" content="<%= homePage.logoImageUrl %>"/>
    <meta property="twitter:title" content="<%= homePage.title %>"/>
    <meta name="description" content="<%= homePage.description %>"/>
    <link rel="canonical" href="<%= homePage.url %>" />
    <link rel="next" href="<%= homePage.nextPageUrl %>" />
    <meta name="robots" content="index, follow">
    <meta property="og:description" content="<%= homePage.description %>"/>
    <meta property="twitter:description" content="<%= homePage.description %>"/>
    <meta property="og:site_name" content="<%= homePage.siteName %>" />
</head>
<body>
    <body>
        <x-header/>
        <x-nav/>
    <section class="top-post">
        <div class="container">
            <a href="#" class="left-box">
                <img src="/images/post/image.png" alt="top-post">
            </a>
            <div class="right-box">
                <a href="#" class="title-link">
                    <h1 class="title">Top post title</h1>
                </a>
                <p class="description">top post description</p>
                <a href="#" class="link-btn btn">read more</a>
            </div>
        </div>
     </section>
     <section class="popular-posts">
         <div class="container">
             <h1 class="visually hidden">Popular posts</h1>
             <ul class="post-list">
                 <li class="post-item">
                     <a href="#" class="post-image-link">
                         <img src="/images/post/image.png" alt="title" class="post-image">
                     </a>
                     <a href="#" class="post-title-link">
                         <h2 class="post-title">popular post title</h2>
                     </a>
                 </li>
                 <li class="post-item">
                     <a href="#" class="post-image-link">
                         <img src="/images/post/image.png" alt="title" class="post-image">
                     </a>
                     <a href="#" class="post-title-link">
                         <h2 class="post-title">popular post title</h2>
                     </a>
                 </li><li class="post-item">
                     <a href="#" class="post-image-link">
                         <img src="/images/post/image.png" alt="title" class="post-image">
                     </a>
                     <a href="#" class="post-title-link">
                         <h2 class="post-title">popular post title</h2>
                     </a>
                 </li>

             </ul>
         </div>
     </section>
     <main class="main">
         <div class="container">
             <section class="blog">
{{--                <% if(page === "category")  {%>--}}
{{--                    <h1 class="blog-title"><%= categoryName %></h1>--}}
{{--                <% } else if(page === "search") {%>--}}
{{--                    <h1 class="blog-title">search Results for: "<%= title %>"</h1>--}}
{{--                <% } else {%>--}}
                 <h1 class="blog-title visually-hidden">The most recent blog posts</h1>

                        <article class="blog-post">
                            <a href="#" class="image-link">
                                <img src="/images/post/image.png" class="post-image" alt="title">
                            </a>
                            <div class="post-container">
                                <a href="#" class="title-link">
                                   <h2 class="post-title">post title</h2>
                                </a>
                                <p class="post-description">post description</p>
                                <a href="#" class="post-link btn">read more</a>
                            </div>
                        </article>
                 <article class="blog-post">
                     <a href="#" class="image-link">
                         <img src="/images/post/image.png" class="post-image" alt="title">
                     </a>
                     <div class="post-container">
                         <a href="#" class="title-link">
                             <h2 class="post-title">post title</h2>
                         </a>
                         <p class="post-description">post description</p>
                         <a href="#" class="post-link btn">read more</a>
                     </div>
                 </article>
                 <article class="blog-post">
                     <a href="#" class="image-link">
                         <img src="/images/post/image.png" class="post-image" alt="title">
                     </a>
                     <div class="post-container">
                         <a href="#" class="title-link">
                             <h2 class="post-title">post title</h2>
                         </a>
                         <p class="post-description">post description</p>
                         <a href="#" class="post-link btn">read more</a>
                     </div>
                 </article>
                 <article class="blog-post">
                     <a href="#" class="image-link">
                         <img src="/images/post/image.png" class="post-image" alt="title">
                     </a>
                     <div class="post-container">
                         <a href="#" class="title-link">
                             <h2 class="post-title">post title</h2>
                         </a>
                         <p class="post-description">post description</p>
                         <a href="#" class="post-link btn">read more</a>
                     </div>
                 </article>

                 <div class="pagination">
                     <ul class="pagination-list">
                         <li class="pagination-item">
                             <a href="#" class="pagination-link prev">
                                 <span class="fas fa-chevron-left"></span>
                             </a>
                         </li>
                         <li class="pagination-item">
                             <a href="#" class="pagination-link active">1</a>
                         </li>
                         <li class="pagination-item">
                             <a href="#" class="pagination-link">2</a>
                         </li>
                         <li class="pagination-item">
                             <a href="#" class="pagination-link">...</a>
                         </li>
                         <li class="pagination-item">
                             <a href="#" class="pagination-link">5</a>
                         </li>
                         <li class="pagination-item">
                             <a href="#" class="pagination-link">6</a>
                         </li>
                         <li class="pagination-item">
                             <a href="#" class="pagination-link next">
                                 <span class="fas fa-chevron-right"></span>
                             </a>
                         </li>
                     </ul>
                </div>
             </section>
             <x-aside/>
         </div>
     </main>
     <x-footer/>

     <script src="/js/main.js"></script>

</body>

</html>

