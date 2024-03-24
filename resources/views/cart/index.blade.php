@php
    $totalPrice = 0;
@endphp
<x-user.layout>
    <x-page-header>My Cart</x-page-header>
    @if (!$cartItems->count())
        <p class="lead text-center">There are no items in your cart.</p>
    @else
        <section class="card shadow">
            <div class="card-body">
                <p hidden class="_getme" id="_getme"></p>
                @foreach ($cartItems as $cartItem)
                    <x-cart.card-horizontal :cartItem="$cartItem" :flavors="$flavors" />

                    @php
                        $totalItemPrice = $cartItem->quantity * $cartItem->product->price;
                        $totalPrice += $totalItemPrice;
                    @endphp
                @endforeach
                <form method="POST" action="/orders">
                    @csrf
                    @foreach ($cartItems as $cartItem)
                        <input hidden name="product_id[]" type="number" value="{{ $cartItem->product->id }}" required>
                        <input hidden name="flavor_id[]" type="number" value="{{ $cartItem->flavor->id }}" required>
                        <input hidden name="quantity[]" type="number" value="{{ $cartItem->quantity }}" required>
                    @endforeach
                    <div class="d-flex flex-column mt-3 align-items-center">
                        <h2>&#8369;{{ $totalPrice }}</h2>
                        <button class="btn btn-lg btn-primary">Checkout</button>
                    </div>
                </form>
            </div>
        </section>
    @endif
</x-user.layout>

