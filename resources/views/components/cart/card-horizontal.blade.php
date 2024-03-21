@props(['item'])














@php
    $quantity = $item->quantity;
    $price = $item->product->price;
    $totalItemPrice = $price * $quantity;
@endphp

<div class="card mt-3" style="height:15rem">
    <div class="row g-0">
        <div type="button" class="col-4"data-bs-toggle="modal"
            data-bs-target="#{{ $item->product->slug }}-{{ $item->flavor->slug }}">
            <img class="w-full object-fit-cover img-fluid rounded-start"
                src='{{ asset("/storage/{$item->product->thumbnail}") }}' style="width:22rem; height:15rem" alt="">
        </div>
        <div class="col-8">
            <div class="h-100 card-body d-flex flex-column justify-content-between">
                <div>
                    <h2 class="card-title">
                        {{ $item->product->name }}
                    </h2>
                    <h3 class="h6 card-subtitle text-body-secondary">
                        {{ $item->flavor->name }}
                    </h3>
                </div>
                <div class="d-flex flex-column text-end justify-content-between">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <form method="POST" action="/cart/{{ $item->product->slug }}/{{ $item->flavor->slug }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-primary border-0"
                                onclick="return confirm('Are you sure?')"><x-icon.cart-x-fill size="32" /></button>
                        </form>
                        <div class="d-flex align-items-center">
                            <form method="POST"
                                action="/cart/{{ $item->product->slug }}/{{ $item->flavor->slug }}/subtract">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-outline-primary border-0"><x-icon.cart-dash-fill
                                        size="32" /></button>
                            </form>
                            <input class="form-control mx-3" name="quantity" type="number"
                                value="{{ $item->quantity }}" disabled>
                            <form method="POST"
                                action="/cart/{{ $item->product->slug }}/{{ $item->flavor->slug }}/add">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-outline-primary border-0"><x-icon.cart-plus-fill
                                        size="32" /></button>
                            </form>
                        </div>
                        <h2>&#8369;{{ $totalItemPrice }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

