<x-layout>
    <x-page-header>Our Menu</x-page-header>
    <p class="lead text-center">Have a look at out our delicious cakes!</p>
    <section class="row row-cols-3 g-5">
        @foreach ($products as $product)
            <x-product.card :product="$product" />

            <x-product.modal :product="$product" :flavors="$flavors" />
        @endforeach
    </section>
</x-layout>

