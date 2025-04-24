@props([
    "type" => "text",
    "name",
    "label",
    "value",
])

<div class="form-floating mb-3">
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $label ?: $name }}"
        value="{{ old($name, $value ?? "") }}"
        {{
            $attributes->except([
                "type",
                "name",
                "id",
                "value",
                "placeholder",
            ])
        }}
    />
    <label for="{{ $name }}">{{ $label }}</label>
</div>
