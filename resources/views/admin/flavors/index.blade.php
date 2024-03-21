<x-user.layout>
    <x-page-header>Flavors</x-page-header>
    @if (!$flavors->count())
        <p class="lead text-center">There are no flavors yet, add one?</p>
    @else
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($flavors as $flavor)
                    <tr>
                        <td>
                            {{ $flavor->name }}
                        </td>
                        <x-table.buttons :item="$flavor" name="flavor" />
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <x-form.button>
        <a class="nav-link" href="/admin/flavors/create">Add a flavor</a>
    </x-form.button>

</x-user.layout>

