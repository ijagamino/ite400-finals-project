<x-user.layout>
    <x-page-header>Overview</x-page-header>
    <form action="">
        <h2>Profile Information</h2>
        <fieldset disabled>
            <div class="row">
                <div class="col">
                    <label class="form-label">Address</label>
                    <input class="form-control" type="text"
                        value="{{ $user->street . ', ' . $user->barangay . ', ' . $user->city }}">
                </div>
                <div class="col">
                    <label class="form-label">Contact Number</label>
                    <input class="form-control" type="text" value="{{ $user->mobile_number }}">
                </div>
            </div>
        </fieldset>
    </form>
    <h2 class="mt-3">Orders</h2>
    @if (!$orders->count())
        <p class="lead">You have not placed any orders yet.</p>
    @else
        <div class="row gy-3">
            @if (!$orders->where('status', '!=', 'complete')->count())
                <p class="lead">No pending orders.</p>
            @else
                @foreach ($orders->where('status', '!=', 'complete') as $order)

                    @php
                        $totalPrice = 0;
                    @endphp
                    <div class="col-lg-4">
                        <a class="card card-body nav-link" href="/orders/{{ $order->slug }}">
                            <h3 class="text-body-secondary">
                                {{ $order->orderDetails->first()->product->name . ' ' . $order->orderDetails->first()->flavor->name }}
                                </h4>
                                @if ($order->orderDetails->count() > 1)
                                    <p class="lead">...and {{ $order->orderDetails->count() - 1 }} other item/s</p>
                                @endif
                                @foreach ($order->orderDetails as $orderDetail)

                                    @php
                                        $totalPrice += $orderDetail->quantity * $orderDetail->product->price;
                                    @endphp
                                @endforeach
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="lead">Placed {{ $order->created_at->diffForHumans() }}</p>
                                    <p class="lead">&#8369;{{ $totalPrice }}</p>
                                </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
        <h2 class="mt-3">Recent orders</h2>
        <div class="row gy-3">
            @if (!$orders->where('status', 'complete')->count())
                <p class="lead">No recent orders</p>
            @else
                @foreach ($orders->where('status', 'complete') as $order)

                    @php
                        $totalPrice = 0;
                    @endphp
                    <div class="col-lg-4">
                        <a class="card card-body nav-link" href="/orders/{{ $order->slug }}">
                            <h3 class="text-body-secondary">
                                {{ $order->orderDetails->first()->product->name . ' ' . $order->orderDetails->first()->flavor->name }}
                            </h3>
                            @if ($order->orderDetails->count() > 1)
                                <p class="lead">...and {{ $order->orderDetails->count() - 1 }} other item/s</p>
                            @endif
                            @foreach ($order->orderDetails as $orderDetail)

                                @php
                                    $totalPrice += $orderDetail->quantity * $orderDetail->product->price;
                                @endphp
                            @endforeach
                            <div class="d-flex flex-row justify-content-between">
                                <p class="lead">Received {{ $order->updated_at->diffForHumans() }}</p>
                                <p class="lead">&#8369;{{ $totalPrice }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    @endif
</x-user.layout>

