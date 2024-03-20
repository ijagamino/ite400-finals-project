<x-admin.layout>

    <table class="table">
        <thead>
            <tr>
                <th scole="col">#</th>
                <th scole="col">Name</th>
                <th scole="col">Address</th>
                <th scole="col">Status</th>
                <th scole="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->slug }}</th>
                    <td>{{ $order->user->first_name . ' ' . $order->user->last_name }}</td>
                    <td>{{ $order->user->street . ' ' . $order->user->barangay . ' ' . $order->user->city }}</td>
                    <td>{{ $order->status }}</td>
                    <td><button class="btn btn-primary btn-lg">Complete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-admin.layout>

