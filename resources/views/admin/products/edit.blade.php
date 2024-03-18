<x-layout>
    <x-page-header>Edit product</x-page-header>
    <section>
        <form method="POST" action="/admin/products/{{ $product->slug }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form-input name="name" :value="old('name', $product->name)" required />
            <x-form-textarea name="description">{{ old('description', $product->description) }}</x-form-textarea>
            <x-form-input name="price" type="number" :value="old('price', $product->price)" required />
            <div class="mt-3">
                <x-form-input name="thumbnail" type="file" :value="old('thumbnail', $product->thumbnail)" />
                <img class="img-fluid object-fit-cover rounded mt-3" style="width: 10rem; height:10rem"
                    src='{{ asset("/storage/{$product->thumbnail}") }}' alt="">
            </div>

            <div class="mt-5">
                <button class="btn btn-secondary btn-lg">Discard changes</button>
                <button class="btn btn-primary btn-lg">Save changes</button>
            </div>
        </form>
    </section>
</x-layout>

