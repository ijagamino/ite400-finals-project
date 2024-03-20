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
            </div>
        </div>
    </div>
</div>

