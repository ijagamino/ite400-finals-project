<x-user.layout>
    <x-page-header>Products</x-page-header>
    @if (!$products->count())
        <p class="lead text-center">There are no products yet, add one?</p>
    @else
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td><img class="img-fluid object-fit-cover rounded" style="height: 10rem; width: 10rem"
                                src='{{ asset("/storage/{$product->thumbnail}") }}' alt="">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>&#8369;{{ $product->price }}</td>
                        <td><a class="btn btn-success" href="/admin/products/{{ $product->slug }}/edit">Edit</a>
                        </td>
                        <td>
                            <form method="POST" action="/admin/products/{{ $product->slug }}">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif
    <x-form.button>
        <a class="nav-link" href="/admin/flavors/create">Add a product</a>
    </x-form.button>
</x-user.layout>

