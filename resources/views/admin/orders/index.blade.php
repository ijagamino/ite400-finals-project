<x-user.layout>
    <x-page-header>Order List</x-page-header>
    @if (!$orders->count())
        <p class="lead text-center">There are no orders yet.</p>
    @else
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">
                            <a class="link-underline link-underline-opacity-0" href="/admin/orders/{{ $order->slug }}">
                                {{ $order->slug }}
                            </a>
                        </th>
                        <td>{{ $order->user->first_name . ' ' . $order->user->last_name }}</td>
                        <td>{{ $order->user->street . ' ' . $order->user->barangay . ' ' . $order->user->city }}
                        </td>
                        @if ($order->status == 'pending')
                            <td>
                                Pending
                            </td>
                            <td>
                                <form method="POST" action="/admin/orders/{{ $order->slug }}">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-primary btn-lg">Confirm</button>
                                </form>
                            </td>
                        @elseif ($order->status == 'complete')
                            <td>
                                Complete
                            </td>
                            <td>
                                <form method="POST" action="/admin/orders/{{ $order->slug }}">
                                    @csrf
                                    @method('PATCH')
                                    <button disabled class="btn btn-primary btn-lg">Confirm</button>
                                </form>
                            </td>
                        @else
                            <td>
                                Out for delivery
                            </td>
                            <td>
                                <button class="btn btn-primary btn-lg" disabled>Confirm</button>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-user.layout>

