<x-layout>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            @foreach ($orderDetails as $orderDetail)
                <x-product.card-horizontal :item="$orderDetail">
                </x-product.card-horizontal>
            @endforeach
        </div>
    </div>
</x-layout>

