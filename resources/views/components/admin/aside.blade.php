<aside class="aside">
    <h2 class="title">Admin Panel</h2>
    <ul class="page-list">
        <li class="page-item">
            <a href="/admin/dashboard" class="page-link {{$page == 'dashboard' ? 'active' : ''}}">
                <span class="fas fa-home"></span>
                <p class="page-name">Dashboard</p>
            </a>
        </li>
        <li class="page-item">
            <a href="/admin/posts" class="page-link {{$page == 'post' ? 'active' : ''}}">
                <span class="fas fa-blog"></span>
                <p class="page-name">Blog Posts</p>
            </a>
        </li>
        <li class="page-item">
            <a href="/admin/categories" class="page-link {{$page == 'category' ? 'active' : ''}}">
                <span class="fas fa-folder"></span>
                <p class="page-name">Blog Categories</p>
            </a>
        </li>
        <li class="page-item">
            <a href="/admin/images" class="page-link {{$page == 'image' ? 'active' : ''}}">
                <span class="fas fa-image"></span>
                <p class="page-name">Image Upload</p>
            </a>
        </li>
    </ul>
</aside>
