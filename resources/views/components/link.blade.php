@php
$clases = 'link';
@endphp
<div>
    <a {{ $attributes->merge(['class' => $clases]) }}>
        {{ $slot }}
    </a>
</div>
