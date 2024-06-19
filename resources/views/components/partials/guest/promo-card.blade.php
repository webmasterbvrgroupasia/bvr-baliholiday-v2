@props(['promoImage'])

<a {{$attributes->merge()}} class="rounded-2xl overflow-hidden h-40 w-full tablet:h-52">
    <img class="h-full object-cover" src="{{$promoImage}}" alt="">
</a>
