<aside class="col-2">
    <nav class="navbar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/overview">Overview</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
            </li>
            @if (!auth()->user()?->admin)
                <li class="nav-item">
                    <a class="nav-link" href="/cart">Cart</a>
                </li>
            @endif
            @if (auth()->user()?->admin)
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/flavors">Flavors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/orders">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/contacts">Messages</a>
                </li>
            @endif
        </ul>
        <div class="vr"></div>
    </nav>
</aside>

