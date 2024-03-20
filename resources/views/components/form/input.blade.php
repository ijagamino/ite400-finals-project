@props(['name', 'type' => 'text', 'label' => ucwords(strtolower($name)), 'placeholder' => auth()->user()->$name ?? false])

<label class="form-label" for="{{ $name }}">{{ ucwords(strtolower($label)) }}</label>
<input class="form-control" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
    placeholder="{{ $placeholder }}" {{ $attributes(['value' => auth()->user()->$name ?? old($name)]) }}>

@error($name)
    <p class="text-danger">{{ $message }}</p>
@enderror

