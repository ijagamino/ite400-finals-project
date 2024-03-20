<x-user.layout>
    <x-page-header>Edit product</x-page-header>
    <form method="POST" action="/admin/flavors/{{ $flavor->slug }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <x-form.input name="name" :value="old('name', $flavor->name)" required />

        <div class="mt-5">
            <button class="btn btn-secondary btn-lg">Discard changes</button>
            <button class="btn btn-primary btn-lg">Save changes</button>
        </div>
    </form>
</x-user.layout>

