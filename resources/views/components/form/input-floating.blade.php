@props(['name', 'type' => 'text'])

@php
    $classes = 'form-floating';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    <input class="form-control" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder=""
        value="{{ old($name) }}" required">
    <label class="form-label" for="{{ $name }}">{{ ucwords(str_replace('_', ' ', $name)) }}</label>
    @error($name)
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

