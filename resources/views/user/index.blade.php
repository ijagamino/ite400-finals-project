<x-layout>
    <div class="row">
        <x-aside />
        <section class="col-8">
            <x-page-header>Overview</x-page-header>
            @if ($user)
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
            @else
            @endif
            <h2>Orders</h2>
            @if ($orders->count() == 0)
                <p>You have not ordered anything yet.</p>
            @else
                @foreach ($orders->where('status', 'pending') as $order)
                    {{ $order->id }}
                @endforeach
            @endif
            <h2>Recently ordered</h2>
            @foreach ($orders->where('status', 'complete') as $order)
                {{ $order->id }}
            @endforeach
        </section>
    </div>

</x-layout>

