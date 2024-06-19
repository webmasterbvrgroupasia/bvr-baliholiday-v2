@props([
    'active' => false
])

@php
$classes = $active
? 'text-[#FFBA6D] font-bold'
: 'text-white'
    
@endphp

<a {{$attributes->merge(['class'=>$classes])}}>
    {{$slot}}
</a>