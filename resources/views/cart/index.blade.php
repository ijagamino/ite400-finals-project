<x-layout>
    <div class="row justify-content-center">
        <x-page-header>My Cart</x-page-header>
        <section class="col-6 mt-3">
            @foreach ($cartItems as $cartItem)
                @if ($cartItem->quantity > 0)
                    <div class="card mt-3">
                        <div class="row g-0">
                            <div class="col-4">
                                <img class="w-full img-fluid rounded-start"
                                    src='{{ asset("/storage/{$cartItem->thumbnail}") }}' alt="">
                            </div>
                            <div class="col-8">
                                <div class="h-100 card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h2 class="card-title">
                                            {{ ucwords(strtolower($cartItem->product_name)) }}</h2>
                                        <h3 class="h6 card-subtitle text-body-secondary">
                                            {{ ucwords(strtolower($cartItem->flavor_name)) }}</h3>
                                        <h3 class="h6 card-subtitle text-body-secondary mt-1">
                                            Layers: {{ ucwords(strtolower($cartItem->layer)) }}</h3>
                                    </div>

                                    <div class="d-flex flex-column text-end justify-content-between">
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <form method="POST"
                                                action="/cart/{{ $cartItem->product_slug }}/{{ $cartItem->flavor_slug }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn"><x-icon-cart-x-fill size="32" /></button>
                                            </form>
                                            <div class="d-flex align-items-center">
                                                <form method="POST"
                                                    action="/cart/{{ $cartItem->product_slug }}/{{ $cartItem->flavor_slug }}/subtract">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn"><x-icon-cart-dash-fill
                                                            size="32" /></button>
                                                </form>
                                                <p class="mb-0">Quantity: {{ $cartItem->quantity }}
                                                </p>
                                                <form method="POST"
                                                    action="/cart/{{ $cartItem->product_slug }}/{{ $cartItem->flavor_slug }}/add">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn"><x-icon-cart-plus-fill
                                                            size="32" /></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <form method="POST" action="/order">
                @csrf
                @foreach ($cartItems as $cartItem)
                    <input hidden name="product_id[]" type="text" value="{{ $cartItem->product_id }}">
                    <input hidden name="flavor_id[]" type="text" value="{{ $cartItem->flavor_id }}">
                    <input hidden name="layer[]" type="text" value="{{ $cartItem->layer }}">
                    <input hidden name="quantity[]" type="text" value="{{ $cartItem->quantity }}">
                @endforeach
                <button class="btn btn-primary btn-lg mt-3">Checkout</button>
            </form>
        </section>
    </div>
</x-layout>

