@props([
'name',
'type' => 'text',
'label' => (ucwords(strtolower($name)))
])

<label class="form-label" for="{{ $name }}">{{ ucwords(strtolower($label)) }}</label>
<input class="form-control" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ auth()->user()->$name ?? false }}" {{ $attributes(['value' => auth()->user()->$name ?? old($name)]) }}>

@error($name)
<p class="text-danger">{{ $message }}</p>
@enderror
