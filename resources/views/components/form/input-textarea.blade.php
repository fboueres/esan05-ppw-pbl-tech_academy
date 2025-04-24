@props([
    "name",
    "label",
    "value",
])

<div class="form-floating mb-3">
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $label ?? $name }}"
        {{
            $attributes->except([
                "name",
                "id",
                "placeholder",
            ])
        }}
    >
{{ old($name, $value ?? "") }}</textarea
    >
    <label for="{{ $name }}">{{ $label }}</label>
</div>
