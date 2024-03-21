<x-layout>
    <x-page-header>Search Results</x-page-header>
    @if (!$search)
        <p class="lead text-center">You did not search for anything</p>
    @elseif ($products->count() == 0)
        <p class="lead text-center">No results found</p>
    @else
        <p class="lead text-center">Results for "{{ $_GET['search'] }}"</p>
        <div class="row row-cols-3 mt-4 justify-content-center">
            @foreach ($products as $product)
                <x-product.card :product="$product" />
            @endforeach
        </div>
    @endif
</x-layout>

