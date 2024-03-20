<x-layout>
    <div class="row justify-content-center">
        <x-page-header>My Cart</x-page-header>
        <section class="col-6 mt-3">
            @foreach ($cartItems as $cartItem)
                @if ($cartItem->quantity > 0)
                    <x-cart.product.card-horizontal :item="$cartItem">
                    </x-cart.product.card-horizontal>
                @endif
            @endforeach
            <form method="POST" action="/orders">
                @csrf
                @foreach ($cartItems as $cartItem)
                    <input hidden name="product_id[]" type="text" value="{{ $cartItem->product->id }}" required>
                    <input hidden name="flavor_id[]" type="text" value="{{ $cartItem->flavor->id }}" required>
                    <input hidden name="layers[]" type="text" value="{{ $cartItem->layers }}" required>
                    <input hidden name="quantity[]" type="text" value="{{ $cartItem->quantity }}" required>
                @endforeach
                <button class="btn btn-primary btn-lg mt-3">Checkout</button>
            </form>
        </section>
    </div>
</x-layout>

