@props(['name'])

<label class="form-label" for="{{ $name }}">{{ ucwords(str_replace('_', ' ', $name)) }}</label>
<textarea class="form-control" name="{{ $name }}" id="{{ $name }}" required>{{ $slot ?? old($name) }}</textarea>

@error($name)
    <p class="text-danger">{{ $message }}</p>
@enderror

