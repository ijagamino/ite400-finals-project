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
                    <form method="POST" action="/cart" name="{{ $product->slug }}">
                        @csrf
                        <input type="number" name="product_id" hidden value="{{ $product->id }}">
                        <div>
                            <x-form.select name="flavor_id" label="flavor" type="number">
                                @foreach ($flavors as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </x-form.select>
                        </div>
                        <div class="mt-3">
                            <x-form.input name="quantity" type="number" required

                                oninput="{
                                var qty = document.forms['{{ $product->slug }}']['quantity'].value;
                                var price = {{ $product->price }};
                                document.querySelector('p#{{ $product->slug }}').innerHTML= 'Total price: &#8369;' + qty
                                * price; }" />
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary">Add to cart</button>
                        </div>

                    </form>
                </div>
                <p class="col text-end" id="{{ $product->slug }}">Total price: &#8369;{{ $product->price }}
                </p>
            </div>
        </div>
    </div>
</div>

