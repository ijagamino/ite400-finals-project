<x-admin.layout>
    <x-page-header>Add a new product</x-page-header>
    <section>
        <form method="POST" action="/admin/products" enctype="multipart/form-data">
            @csrf

            <x-form-input name="thumbnail" type="file" />
            <x-form-input name="name" />
            <x-form-input name="description" />
            <x-form-input name="price" type="number" />

            <button>Add new product</button>
        </form>
    </section>
</x-admin.layout>

