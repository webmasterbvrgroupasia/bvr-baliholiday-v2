@props(['title', 'active' => false])

@php
$classes = $active
? 'text-[#FF5700]' : 'text-[#989898]'
@endphp

@php
    $borderColor = $active
    ? 'border-[#FF5700] bg-[#FFF7EC]' : 'border-[#BDBDBD]'
@endphp


<div class="px-4 py-2 rounded-[50px] border cursor-pointer {{ $borderColor }}">
    <div class="text-[16px] font-semibold {{ $classes }} leading-6">
        {{ $title }}
    </div>
</div>
