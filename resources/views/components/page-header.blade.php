@php
    $classes = 'fw-bold display-1 text-center';
@endphp
<header class="mb-3">
    <h1 {{ $attributes(['class' => $classes]) }}>{{ $slot }}</h1>
</header>
<hr>

