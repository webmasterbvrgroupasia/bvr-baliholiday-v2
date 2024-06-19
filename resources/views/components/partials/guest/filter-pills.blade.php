@props(['active'=>false])
@php
    $classes = $active
    ? 'text-[#ff5700]'
    : 'text-[#989898] border-[1px] border-[#BDBDBD]'
@endphp
<button {{$attributes->merge(['class' => $classes . ' text-sm tablet:text-base p-2 font-semibold rounded-full'])}}>
    {{$slot}}
</button>