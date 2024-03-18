<x-layout>
    <h2>Flavors</h2>
    <ul class="list-group">
        @foreach ($flavors as $flavor)
            <li class="list-group-item">{{ $flavor->name }}</li>
        @endforeach
    </ul>
</x-layout>

