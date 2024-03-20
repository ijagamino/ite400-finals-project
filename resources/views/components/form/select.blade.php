@props([
'name',
'label' => (ucwords(strtolower($name)))
])

@php
$classes = 'form-select';
@endphp

<label class="form-label" for="{{ $name }}">{{ ucwords(strtolower($label))}}</label>
<select {{ $attributes(['class' => $classes]) }} name="{{ $name }}" id="{{ $name }}">
    {{ $slot }}
</select>
