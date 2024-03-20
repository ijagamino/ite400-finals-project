<x-user.layout>
    <x-page-header>Add a new flavor</x-page-header>
    <section>
        <x-form.card action="/admin/flavors">
            <div class="card-body">
                <x-form.input name="name" />
                <x-form.button>Add new flavor</x-form.button>
            </div>
        </x-form.card>
    </section>
</x-user.layout>

