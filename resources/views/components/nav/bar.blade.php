<header class="shadow bg-primary sticky-top">
    <nav class="navbar navbar-expand-lg text-white">
        <div class="container">
            <a class="navbar-brand text-white" href="/">Cake Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Displays when user is not logged in  -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <x-nav.link href="/menu">Menu</x-nav.link>
                    </li>
                    <li class="nav-item">
                        <x-nav.link href="/about">About</x-nav.link>
                    </li>
                    <li class="nav-item">
                        <x-nav.link href="/contact">Contact</x-nav.link>
                    </li>
                </ul>
                <form method="GET" action="/results" class="d-flex mx-auto" role="search">
                    <input type="search" name="search" class="form-control me-2" placeholder="Search">
                    <button class="btn btn-dark">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @auth
                        @if (auth()->user()->admin)
                            <li class="nav-item">
                                <x-nav.link href="/admin">Dashboard</x-nav.link>
                            </li>
                        @else
                            <li class="nav-item">
                                <x-nav.link href="/cart">Cart</x-nav.link>
                            </li>
                        @endif
                        <li class="nav-item">
                            <x-nav.link href="/overview">{{ auth()->user()->first_name }}</x-nav.link>
                        </li>
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="nav-link text-white">Log Out</button>
                        </form>
                    @else
                        <li class="nav-item">
                            <x-nav.link href="/login">Log In</x-nav.link>
                        </li>
                        <li class="nav-item">
                            <x-nav.link href="/register">Register</x-nav.link>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>

