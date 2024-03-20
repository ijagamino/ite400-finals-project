<x-admin.layout>
    <x-page-header>Dashboard</x-page-header>
    <div class="row gy-5">
        <div class="col-lg-6 col-12">
            <a href="/admin/products">
                <div class="card card-body">
                    <h2 class="card-title">Products</h2>
                    <p class="card-text">total products: {{ $products->count() }}</p>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-12">
            <a href="/admin/flavors">
                <div class="card card-body">
                    <h2 class="card-title">Flavors</h2>
                    <p class="card-text">Total flavors: {{ $flavors->count() }}</p>
                </div>
            </a>
        </div>
        <div class="col-12">
            <a href="/admin/orders">
                <div class="card card-body">
                    <h2 class="card-title">Orders</h2>
                    <p class="card-text">Total orders: {{ $orders->count() }}</p>
                    <p class="card-text">Total completed orders: {{ $orders->where('status', 'complete')->count() }}
                    </p>
                </div>
            </a>
        </div>
        <div class="col-12">
            <a href="/admin/products">
                <div class="card card-body">
                    <h2 class="card-title">Pending Orders</h2>
                    <p class="card-text">Total pending orders: {{ $orders->where('status', 'pending')->count() }}
                    </p>
                </div>
            </a>
        </div>
    </div>
</x-admin.layout>

