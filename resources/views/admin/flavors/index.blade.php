<x-user.layout>
    <x-page-header>Flavors</x-page-header>
    @if (!$flavors->count())
        <p class="lead text-center">There are no flavors yet, add one?</p>
    @else
        <table class="table table-flavor">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flavors as $flavor)
                    <tr>
                        <td>
                            {{ $flavor->name }}
                        </td>
                        <td class="">
                            <div class="d-flex flex-row justify-content-end">
                                <a class="btn btn-success me-3" href="/admin/flavors/{{ $flavor->slug }}/edit">Edit</a>
                                <form method="POST" action="/admin/flavors/{{ $flavor->slug }}">
                                    @csrf
                                    @method('DELETE')

                                    <button onclick="return confirm('Are you sure?')"
                                        class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <x-form.button>
        <a class="nav-link" href="/admin/flavors/create">Add a flavor</a>
    </x-form.button>

</x-user.layout>

