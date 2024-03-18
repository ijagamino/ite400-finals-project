@php
    $classes = 'fw-bold display-1 text-center';
@endphp
<header class="">
    <h1 {{ $attributes(['class' => $classes]) }}>{{ $slot }}</h1>
</header>

