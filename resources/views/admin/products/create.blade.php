<x-user.layout>
    <x-page-header>Add a new product</x-page-header>
    <section>
        <x-form.card action="/admin/products" enctype="multipart/form-data">
            <div class="card-body">
                <x-form.input name="thumbnail" type="file" />
                <x-form.input name="name" />
                <x-form.input name="description" />
                <x-form.input name="price" type="number" />
                <x-form.button>Add new product</x-form.button>
            </div>
        </x-form.card>
    </section>
</x-user.layout>

