@props(['product'])

<div class="col">
    <div type="button" class="card" data-bs-toggle="modal" data-bs-target="#{{ $product->slug }}">
        <img class="card-img-top object-fit-cover" style="height: 20rem"
            src='{{ asset("/storage/{$product->thumbnail}") }}' alt="">
        <div class="card-body" style="height: 20rem">
            <h3 class="card-title"> {{ $product->name }} </h3>
            <p class="card-text"> &#8369;{{ $product->price }}</p>
            <p class="card-text"> {{ $product->description }}</p>
        </div>
    </div>
</div>

