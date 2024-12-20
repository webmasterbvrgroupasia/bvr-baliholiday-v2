@props(['title', 'image'])
<div class="w-[348px] h-[348px] bg-red-500 rounded-[16px] overflow-hidden">
    <img src="{{ $image }}" alt="" class="rounded-[16px] object-cover h-full">
    <div class="flex justify-center -mt-20 backdrop-blur h-full">
       <p class="text-white text-[40px] font-semibold">{{ $title }}</p>
    </div>
</div>



