@props(['propertyImage', 'accomodationName', 'accomodationLocation', 'nearbyLocation', 'oldPrice', 'currentPrice'])
<a {{ $attributes->merge() }} class="bg-white w-full tablet:w-[348px] border border-[#BDBDBD] h-[456px] rounded-2xl overflow-hidden">
    <div class="h-[225px]">
        <img src="{{ $propertyImage }}" class="h-full w-full object-cover" alt="">
    </div>
    <div class="px-6 py-5 h-[231px] flex flex-col justify-between">
        <div class="space-y-4">
            <div>
                <h4 class="font-semibold text-lg">
                    {{ $accomodationName }}
                </h4>
                <p class="text-sm font-medium text-[#7C7C7C]">
                    {{ $accomodationLocation }}
                </p>
            </div>
            <div class="flex space-x-2">
                <div>
                    <x-icon.umbrella-icon />
                </div>
                <div class="text-sm text-[#7C7C7C]">
                    <span class="font-medium">Near </span><span class="font-semibold">{{ $nearbyLocation }}</span>
                </div>
            </div>
        </div>
        <div class="space-y-1">
            <div class="flex items-center space-x-2">
                <div class="line-through text-sm font-medium text-[#7C7C7C]">
                    {{ $oldPrice }}
                </div>
                <div class="text-[#ff5700] bg-[#ffedd3] w-fit px-2 py-1 text-sm font-bold rounded-[10px]">
                    10%
                </div>
            </div>
            <div class="font-semibold text-xl text-[#ff5700]">
                {{ $currentPrice }}
            </div>
        </div>

    </div>
</a>
