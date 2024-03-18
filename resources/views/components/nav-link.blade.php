@php
    $classes = 'nav-link text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}>{{ $slot }}</a>

