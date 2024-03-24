@props(['cartItem', 'flavors'])

@php
    $quantity = $cartItem->quantity;
    $price = $cartItem->product->price;
    $totalItemPrice = $price * $quantity;
@endphp

<div class="card mt-3">
    <div class="row g-0">
        <div class="col-lg-4 col-12">
            <img class="w-full object-fit-cover img-fluid rounded-start"
                src='{{ asset("/storage/{$cartItem->product->thumbnail}") }}' style="width:22rem; height:15rem"
                alt="">
        </div>
        <div class="col-lg-8 col-12">
            <div class="h-100 card-body d-flex flex-column justify-content-between">
                <div>
                    <h2 class="card-title">
                        {{ $cartItem->product->name }}
                    </h2>
                    <h3 class="h6 card-subtitle text-body-secondary">
                        <form method="POST" action="/cart/{{ $cartItem->product->slug }}/{{ $cartItem->flavor->slug }}"
                            id="{{ $cartItem->product->slug }}-{{ $cartItem->flavor->slug }}"

                            oninput="{
                                document.getElementById('{{ $cartItem->product->slug }}-{{ $cartItem->flavor->slug }}').submit();
                                }">
                            @csrf
                            @method('PATCH')
                            <x-form.select name="flavor_id" label="flavor" type="number">
                                @foreach ($flavors as $id => $name)
                                    <option value="{{ $id }}"
                                        {{ $cartItem->flavor->id == $id ? 'selected' : '' }}>
                                        {{ $name }}</option>
                                @endforeach
                            </x-form.select>
                        </form>
                    </h3>
                </div>
                <div class="d-flex flex-column text-end justify-content-between">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <form method="POST"
                            action="/cart/{{ $cartItem->product->slug }}/{{ $cartItem->flavor->slug }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-primary border-0"
                                onclick="return confirm('Are you sure?')"><x-icon.cart-x-fill size="32" /></button>
                        </form>
                        <div class="d-flex align-items-center">
                            <form method="POST"
                                action="/cart/{{ $cartItem->product->slug }}/{{ $cartItem->flavor->slug }}/subtract">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-outline-primary border-0"><x-icon.cart-dash-fill
                                        size="32" /></button>
                            </form>
                            <form class="mx-3" method="POST"
                                action="/cart/{{ $cartItem->product->slug }}/{{ $cartItem->flavor->slug }}/quantity"
                                id="{{ $cartItem->product->slug }}-{{ $cartItem->flavor->slug }}-quantity">
                                @csrf
                                @method('PATCH')
                                <input class="form-control" name="quantity" type="number"
                                    value="{{ $cartItem->quantity }}"

                                    onfocusout="{
                                document.getElementById('{{ $cartItem->product->slug }}-{{ $cartItem->flavor->slug }}-quantity').submit();
                                }">
                            </form>
                            <form method="POST"
                                action="/cart/{{ $cartItem->product->slug }}/{{ $cartItem->flavor->slug }}/add">
                                @csrf
                                @method('PATCH')
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

