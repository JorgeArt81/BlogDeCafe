@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav__link active'
            : 'nav__link';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
