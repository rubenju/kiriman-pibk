@props([
    'type' => 'button',
    'id'
])

<button 
    type="{{ $type }}"
    id="{{ $id }}" 
    {{ $attributes->merge(['class' => 'btn btn-style']) }}>
    {{ $slot }}
</button>