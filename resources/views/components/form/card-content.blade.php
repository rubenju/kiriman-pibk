@props(['name'])

<div class="mb-2">
  <x-form.label for="{{ $name }}" class="form-label" :title="$title" />
  {{ $slot }}
</div>