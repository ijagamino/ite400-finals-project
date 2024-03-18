@props(['name'])

@php
    $classes = 'form-select';
@endphp

<label class="form-label" for="{{ $name }}">{{ ucwords($name) }}</label>

<select {{ $attributes(['class' => $classes]) }} name="{{ $name }}" id="{{ $name }}">
    {{ $slot }}
</select>

