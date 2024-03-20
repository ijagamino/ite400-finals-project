<x-layout>
    <div class="row">
        <x-aside />
        <section class="col-8">
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
            <h2>Orders</h2>
            @if (!$orders->count())
                <p>You have not placed any orders yet.</p>
            @else
                @foreach ($orders->where('status', 'pending') as $order)
                    <a href="/orders/{{ $order->slug }}">{{ $order->slug }}</a>
                @endforeach
                <h2>Recently ordered</h2>
                @foreach ($orders as $order)
                    <a href="/orders/{{ $order->slug }}">{{ $order->slug }}</a>
                @endforeach
            @endif
        </section>
    </div>

</x-layout>

