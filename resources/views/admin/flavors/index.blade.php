<x-admin.layout>
    <x-page-header>Flavors</x-page-header>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col"></th>
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

                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary btn-lg" href="/admin/flavors/create">Add flavor</a>
</x-admin.layout>

