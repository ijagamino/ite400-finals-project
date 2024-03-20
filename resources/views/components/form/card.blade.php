@props(['method' => 'POST'])

<form class="shadow card" method={{ $method }} {{ $attributes }}>
    @csrf
    {{ $slot }}
</form>

