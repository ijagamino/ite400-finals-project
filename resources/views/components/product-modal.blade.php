@props(['product', 'flavors'])

<div class="modal fade" id="{{ $product->slug }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title " id="exampleModalLabel">
                    {{ $product->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row row-cols-1">
                <div class="col">
                    <img class="w-100 object-fit-cover rounded" style="height: 25rem"
                        src='{{ asset("/storage/{$product->thumbnail}") }}' alt="">
                </div>
                <div class="col">
                    <form method="POST" action="/cart">
                        @csrf
                        <input type="number" name="product_id" hidden value="{{ $product->id }}">
                        <div>
                            <x-form-select name="flavor_id" label="flavor" type="number">
                                @foreach ($flavors as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </x-form-select>
                        </div>
                        <div class="mt-3">
                            <x-form-select name="layers" classes="mt-3">
                                <option value="1">One (1)</option>
                                <option value="2">Two (2)</option>
                                <option value="3">Three (3)</option>
                            </x-form-select>
                        </div>
                        <div class="mt-3">
                            <x-form-input name="quantity" type="number" required />
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary">Add to cart</button>
                        </div>

                    </form>
                </div>
                <?php $quantity = 1; ?>
                <p class="col text-end">Total price: &#8369;{{ $quantity * $product->price }}</p>
            </div>
        </div>
    </div>
</div>

