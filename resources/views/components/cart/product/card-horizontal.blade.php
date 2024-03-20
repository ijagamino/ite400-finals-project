@props(['item'])

<div class="card mt-3">
    <div class="row g-0">
        <div class="col-4">
            <img class="w-full img-fluid rounded-start" src='{{ asset("/storage/{$item->product->thumbnail}") }}'
                alt="">
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
                    <h3 class="h6 card-subtitle text-body-secondary mt-1">
                        @if ($item->layers > 1)
                            Layers: {{ $item->layers }}
                        @else
                            Layer: {{ $item->layers }}
                        @endif
                    </h3>
                </div>

                <div class="d-flex flex-column text-end justify-content-between">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <form method="POST" action="/cart/{{ $item->product->slug }}/{{ $item->flavor->slug }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn"><x-icon-cart-x-fill size="32" /></button>
                        </form>
                        <div class="d-flex align-items-center">
                            <form method="POST"
                                action="/cart/{{ $item->product->slug }}/{{ $item->flavor->slug }}/subtract">
                                @csrf
                                @method('PUT')
                                <button class="btn"><x-icon-cart-dash-fill size="32" /></button>
                            </form>
                            <p class="mb-0">Quantity: {{ $item->quantity }}
                            </p>
                            <form method="POST"
                                action="/cart/{{ $item->product->slug }}/{{ $item->flavor->slug }}/add">
                                @csrf
                                @method('PUT')
                                <button class="btn"><x-icon-cart-plus-fill size="32" /></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

