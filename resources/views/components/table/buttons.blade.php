@props(['item', 'name'])
<td>
    <div class="d-flex flex-row justify-content-end">
        <a class="btn btn-success me-3" href="/admin/{{ $name }}s/{{ $item->slug }}/edit">Edit</a>
        <form method="POST" action="/admin/flavors/{{ $item->slug }}">
            @csrf
            @method('DELETE')

            <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
        </form>
    </div>
</td>

