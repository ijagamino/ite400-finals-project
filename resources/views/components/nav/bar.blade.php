<header class="shadow bg-primary sticky-top">
    <nav class="navbar navbar-expand-lg text-white">
        <div class="container justify-content-between">
            <a class="navbar-brand text-white" href="/">Cake Hub</a>
            <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <x-nav.link href="/menu">Menu</x-nav.link>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->first_name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/overview">Overview</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                @if (!auth()->user()->admin)
                                    <li>
                                        <a class="dropdown-item" href="/cart">Cart</a>
                                    </li>
                                @else
                                    <li>
                                        <a class="dropdown-item" href="/admin">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/admin/products">Products</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/admin/flavors">Flavors</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/admin/orders">Orders</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/admin/messages">Messages</a>
                                    </li>
                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <button class="dropdown-item">Log Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <x-nav.link href="/login">Log In</x-nav.link>
                        </li>
                        <li class="nav-item">
                            <x-nav.link href="/register">Register</x-nav.link>
                        </li>
                    @endauth
                </ul>
                <form method="GET" action="/results" class="d-flex" role="search">
                    <input type="search" name="search" class="form-control me-2" placeholder="Search">
                    <button class="btn btn-dark">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>

