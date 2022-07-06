<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><%= post.title%></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/post.css">
    <link rel="stylesheet" href="/css/themes/prism/prism.css">
    <meta property="title" content="<%= post.title %>"/>
    <meta property="og:title" content="<%= post.title %>"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<%= homePage.url %>/posts/<%= post.slug%>" />
    <meta property="og:image" content="<%= homePage.url %>/images/post/<%= post.image %>"/>
    <meta property="twitter:title" content="<%= post.title %>"/>
    <meta name="description" content="<%= post.description %>"/>
    <link rel="canonical" href="<%= homePage.url %>/posts/<%= post.slug%>" />
    <meta name="robots" content="index, follow">
    <meta property="og:description" content="<%= post.description %>"/>
    <meta property="twitter:description" content="<%= post.description %>"/>
    <meta property="og:site_name" content="<%= homePage.siteName %>" />
</head>
<body>
    <body>
        <%- include('./includes/header.ejs')%>
        <%- include('./includes/nav.ejs')%>
     <main class="main">
         <div class="container">
             <section class="post">
                 <h1 class="title"><%= post.title%></h1>
                 <img src="/images/post/<%= post.image%>" alt="<%= post.title%>">
                 <div class="content">
                     <%- post.content %>
                 </div>
             </section>
             <%- include('./includes/aside.ejs')%>
         </div>
     </main>
     <%- include('./includes/footer.ejs')%>

     <script src="/js/main.js"></script>
     <script src="/js/themes/prism/prism.js"></script>

</body>

</html>
