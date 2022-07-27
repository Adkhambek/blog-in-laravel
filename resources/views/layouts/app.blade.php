<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/blog.css">
    <meta property="title" content="@yield('title')"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('url')" />
    <meta property="og:image" content="@yield('imageUrl')"/>
    <meta property="twitter:title" content="@yield('title')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="@yield('url')" />
    @yield('nextPage')
    <meta name="robots" content="index, follow">
    <meta property="og:description" content="@yield('description')"/>
    <meta property="twitter:description" content="@yield('description')"/>
    <meta property="og:site_name" content="@yield('siteName')" />
</head>
<body>
<header class="header">
    <div class="container">
        <a class="header-link" href="/">
            <img class="header-logo" src="/images/logo.png" alt="<%= homePage.title %>" />
        </a>
        <button class="menu-button">
            <span class="fas fa-bars"></span>
        </button>
        <button class="menu-close-btn hidden">
            <span class="fas fa-times"></span>
        </button>
    </div>
</header>
<nav class="nav">
    <div class="container">
        <ul class="nav-list">
            @foreach($categories as $category)
            <li class="nav-item">
                <a href="/?category={{$category->slug}}" class="nav-link">{{$category->name}}</a>
            </li>
            @endforeach
            <li class="nav-item search">
                <button class="search-btn">
                    <span class="fas fa-search"></span>
                </button>
            </li>
        </ul>
        <form action="/" method="GET" class="search-form hidden">
            <input class="search-input" name="search" value="{{request('search')}}" type="search" placeholder="search..." autocomplete="off" />
            <button type="button" class="close-btn">
                <span class="fas fa-times"></span>
            </button>
        </form>
    </div>
</nav>
    @yield('content')
<footer class="footer">
    <p class="copyright">&copy; <span class="year">2020</span> website.com</p>
</footer>
<script src="/js/main.js"></script>
<script src="/js/themes/prism/prism.js"></script>
</body>
