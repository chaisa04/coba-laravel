<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/"><i class="bi bi-stars"> CM Blog</i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : ' ' }}" href="/"><i class="bi bi-house-door-fill"> Home</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : ' ' }}" href="/about"><i class="bi bi-file-earmark-person-fill"> About</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : ' ' }}" href="/posts"><i class="bi bi-chat-text"> Blog</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : ' ' }}"
                        href="/categories"><i class="bi bi-bookmarks"> Categories</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'laporan' ? 'active' : ' ' }}"
                        href="/laporan"><i class="bi bi-book-half"> Laporan</i></a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-person-fill-down"></i> Logout</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : ' ' }}"><i
                                        class="bi bi-person-fill-up"></i>Login</a>
                            </li>
                        @endauth
                    </ul>
        </div>
    </div>
</nav>
