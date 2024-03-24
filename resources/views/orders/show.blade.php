<x-user.layout>
    <x-page-header>Order Details</x-page-header>
    <p class="lead text-center">Order details for order ID#{{ $order->slug }}</p>
    <section class="card shadow">
        <div class="card-body">

            @php
                $totalPrice = 0;
            @endphp
            @foreach ($orderDetails as $orderDetail)
                <x-product.card-horizontal :item="$orderDetail">
                </x-product.card-horizontal>

                @php
                    $totalPrice += $orderDetail->quantity * $orderDetail->product->price;
                @endphp
            @endforeach
            <h2 class="text-center mt-3">Total price: &#8369;{{ $totalPrice }}</h2>
            @if ($order->status == 'pending')
                <div class="d-flex flex-column align-items-center">
                    <p class="text-body-secondary text-center">Your order is still pending, wait for confirmation
                    </p>
                    <button disabled class="btn btn-primary btn-lg">Confirm</button>
                </div>
            @elseif ($order->status == 'preparing')
                <div class="d-flex flex-column align-items-center">
                    <p class="text-body-secondary text-center">Your order is now being prepared</p>
                    <button disabled class="btn btn-primary btn-lg">Confirm</button>
                </div>
            @elseif ($order->status == 'ongoing')
                <div class="d-flex flex-column align-items-center">
                    <p class="text-body-secondary">Received the order already? Press the button below</p>
                    <x-icon.arrow-down size="32" />
                    <form method="POST" action="/orders/{{ $order->slug }}" class="mt-3">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-primary btn-lg">Confirm</button>
                    </form>
                </div>
            @else
                <div class="d-flex flex-column align-items-center">
                    <p class="text-body-secondary text-center">You have received your order!</p>
                    <button disabled class="btn btn-primary btn-lg">Confirm</button>
                </div>
            @endif
        </div>
    </section>
</x-user.layout>

