@props(['item'])

<div class="card mt-3" style="height: 15rem">
    <div class="row g-0">
        <div class="col-4">
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
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <p class="lead mb-0">&#8369;{{ $item->product->price . ' x' . $item->quantity }}
                    </div>
                    <h2 class="mb-0">&#8369;{{ $item->quantity * $item->product->price }}
                </div>
            </div>
        </div>
    </div>
</div>

