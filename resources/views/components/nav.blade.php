<nav class="nav">
    <div class="container">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="#" class="nav-link">PHP</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Nodejs</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Larvel</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Javascript</a>
            </li>
            <li class="nav-item search">
                <button class="search-btn">
                    <span class="fas fa-search"></span>
                </button>
            </li>
        </ul>
        <form action="/search" method="GET" class="search-form hidden">
            <input class="search-input" name="s" type="search" placeholder="search..." autocomplete="off" />
            <button type="button" class="close-btn">
                <span class="fas fa-times"></span>
            </button>
        </form>
    </div>
</nav>
