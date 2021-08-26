@props(['active'])

@php
$classes = $active ?? false ? 'capitalize text-xl text-white leading-10 border-b-2 border-negro' : 'capitalize text-xl text-white leading-10 border-transparent hover:border-negro border-b-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
