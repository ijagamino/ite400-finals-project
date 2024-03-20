<x-user.layout>
    <x-page-header>Dashboard</x-page-header>
    <div class="row gy-5">
        <div class="col-lg-6 col-12">
            <x-dashboard.panel href="/admin/products">
                <h2 class="card-title">Products</h2>
                <p class="card-text">Total products: {{ $products->count() }}</p>
            </x-dashboard.panel>
        </div>
        <div class="col-lg-6 col-12">
            <x-dashboard.panel href="/admin/flavors">
                <h2 class="card-title">Flavors</h2>
                <p class="card-text">Total flavors: {{ $flavors->count() }}</p>
            </x-dashboard.panel>
        </div>
        <div class="col-12">
            <x-dashboard.panel href="/admin/orders">
                <h2 class="card-title">Orders</h2>
                <p class="card-text">Total orders: {{ $orders->count() }}</p>
                @if ($orders->where('status', 'pending')->count())
                    <p class="card-text">Total pending orders: {{ $orders->where('status', 'pending')->count() }}
                @endif
                @if ($orders->where('status', 'ongoing')->count())
                    <p class="card-text">Total ongoing orders: {{ $orders->where('status', 'ongoing')->count() }}
                @endif
                @if ($orders->where('status', 'complete')->count())
                    <p class="card-text">Total completed orders: {{ $orders->where('status', 'complete')->count() }}
                @endif
            </x-dashboard.panel>
        </div>
    </div>
</x-user.layout>

