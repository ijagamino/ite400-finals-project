<x-layout>
    <x-page-header>Our Menu</x-page-header>
    <section class="row mt-5">
        <div class="row row-cols-3 g-5 mt-4">
            @foreach ($products as $product)
                <x-product-card :product="$product" />

                <x-product-modal :product="$product" :flavors="$flavors" />
            @endforeach
        </div>
    </section>
</x-layout>

