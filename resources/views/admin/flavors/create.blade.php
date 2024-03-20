<x-admin.layout>
    <section class="row justify-content-center">
        <x-page-header>Add a new flavor</x-page-header>
        <x-admin.aside></x-admin.aside>
        <div class="col-lg">
            <form method="POST" action="/admin/flavors" enctype="multipart/form-data">
                @csrf

                <x-form-input name="name" />

                <button class="btn btn-primary btn-lg">Add new flavor</button>
            </form>
        </div>
    </section>
</x-admin.layout>

