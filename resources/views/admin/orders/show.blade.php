<x-user.layout>
    <x-page-header>Order Details</x-page-header>
    <p class="lead text-center">Order details for order ID#{{ $order->slug }}</p>
    <section class="card shadow">
        <div class="card-body">

            @php
                $totalPrice = 0;
            @endphp
            @foreach ($orderDetails as $orderDetail)
                <x-product.card-horizontal :item="$orderDetail"> </x-product.card-horizontal>

                @php
                    $totalPrice += $orderDetail->quantity * $orderDetail->product->price;
                @endphp
            @endforeach
            <h2 class="text-center mt-3">Total price: &#8369;{{ $totalPrice }}</h2>
            @if ($order->status == 'pending')
                <div class="d-flex flex-column align-items-center">
                    <p class="text-body-secondary text-center">Order is pending</p>
                    <form method="POST" action="/admin/orders/{{ $order->slug }}">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-primary btn-lg">Confirm</button>
                    </form>
                </div>
            @elseif ($order->status == 'ongoing')
                <div class="d-flex flex-column align-items-center">
                    <p class="text-body-secondary text-center">Order is out for delivery</p>
                    <button class="btn btn-primary btn-lg" disabled>Confirm</button>
                </div>
            @else
                <div class="d-flex flex-column align-items-center">
                    <p class="text-body-secondary text-center">Order is complete!</p>
                    <button disabled class="btn btn-primary btn-lg">Confirm</button>
                </div>
            @endif
        </div>
    </section>
</x-user.layout>

