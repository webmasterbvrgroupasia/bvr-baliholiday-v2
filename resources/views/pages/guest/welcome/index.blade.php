{!! seo($seoData) !!}

<x-layouts.guest.main-layout>
    <header class="h-[60vh] bg-black">

    </header>

    <main class="py-7">
        {{-- Promo Section Start --}}
        <section class="py-7 w-full">
            <div class="max-w-full tablet:max-w-2xl laptop:max-w-4xl laptop-l:max-w-7xl mx-auto px-4 tablet:px-0 space-y-10">
                <div>
                    <div class="flex items-center space-x-3">
                        <div>
                            <x-icon.percent-icon />
                        </div>
                        <div class="space-y-2">
                            <x-partials.guest.third-heading>
                                Don't miss our special promo
                            </x-partials.guest.third-heading>
                        </div>
                    </div>
                    <p class="text-sm tablet:text-base font-medium text-[#7C7C7C]">
                        Here are some promo that we have made special for you. Pick before it expires!
                    </p>
                </div>
                <div class="flex flex-col tablet:flex-row gap-4">
                    <x-partials.guest.promo-card promoImage="https://ik.imagekit.io/tvlk/image/imageResource/2024/04/03/1712115467746-43d8a7d781a6c5e16f40483552bdc2e8.png?tr=dpr-2,q-75,w-1280"/>
                    <x-partials.guest.promo-card promoImage="https://ik.imagekit.io/tvlk/image/imageResource/2024/05/31/1717142432380-b725bc104e57cc1ff950bbc63362e871.png?tr=q-75"/>                
                </div>
            </div>
        </section>
        {{-- Promo Section End --}}

        {{-- Accomodation Section Start --}}
        <section class="py-7 w-full">
            <div class="max-w-full tablet:max-w-2xl laptop:max-w-4xl laptop-l:max-w-7xl mx-auto px-4 tablet:px-0 space-y-10">
                <div>
                    <div class="flex items-center space-x-3">
                        <div>
                            <x-icon.flame-icon />
                        </div>
                        <div class="space-y-2">
                            <x-partials.guest.third-heading>
                                Hottest Accomodation in Bali
                            </x-partials.guest.third-heading>
                        </div>
                    </div>
                    <p class="text-sm tablet:text-base font-medium text-[#7C7C7C]">
                        Here are some promo that we have made special for you. Pick before it expires!
                    </p>
                </div>
                <div class="flex flex-col items-stretch tablet:flex-row gap-4 ">
                    <x-partials.guest.accomodation-card href="#" propertyImage="https://images.unsplash.com/photo-1718030323555-214805b7f884?q=80&w=2942&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" accomodationName="Atta Mesari Ubud" accomodationLocation="Ubud, Gianyar" nearbyLocation="Ubud Art Market" oldPrice="IDR 1.800.000" currentPrice="IDR 1.550.000"/>
                    <x-partials.guest.accomodation-card href="#" propertyImage="https://images.unsplash.com/photo-1718053514237-0d287a33011c?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" accomodationName="Arkamara Dijiwa Sanctuaries" accomodationLocation="Ubud, Gianyar" nearbyLocation="Ubud Art Market" oldPrice="IDR 1.800.000" currentPrice="IDR 1.550.000"/>
                    <x-partials.guest.accomodation-card href="#" propertyImage="https://images.unsplash.com/photo-1583329550487-0fa300a4cd1a?q=80&w=2696&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" accomodationName="Goya Boutique Resort" accomodationLocation="Ubud, Gianyar" nearbyLocation="Ubud Art Market" oldPrice="IDR 1.800.000" currentPrice="IDR 1.550.000"/>
                    <x-partials.guest.accomodation-card href="#" propertyImage="https://images.unsplash.com/photo-1586105251261-72a756497a11?q=80&w=2758&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" accomodationName="Vije Boutique Resort and Spa" accomodationLocation="Ubud, Gianyar" nearbyLocation="Ubud Art Market" oldPrice="IDR 1.800.000" currentPrice="IDR 1.550.000"/>
                </div>
                <div>
                    <x-partials.guest.orange-text-button href="#">
                        See More Accomodations
                    </x-partials.guest.orange-text-button>
                </div>
            </div>
        </section>
        {{-- Accomodation Section End --}}

        {{-- Activities Section Start --}}
        <section class="py-7 w-full">
            <div class="max-w-full tablet:max-w-2xl laptop:max-w-4xl laptop-l:max-w-7xl mx-auto px-4 tablet:px-0 space-y-10">
                <div>
                    <div class="flex items-center space-x-3">
                        <div>
                            <x-icon.trending-icon />
                        </div>
                        <div class="space-y-2">
                            <x-partials.guest.third-heading>
                                Trending Activities in Bali
                            </x-partials.guest.third-heading>
                        </div>
                    </div>
                    <p class="text-sm tablet:text-base font-medium text-[#7C7C7C]">
                        We serve you villa, resort, and hotel for your convenience in Bali - The Land of Gods
                    </p>
                </div>
                <div>
                    <x-partials.guest.orange-text-button href="#">
                        Explore More Activities
                    </x-partials.guest.orange-text-button>
                </div>
            </div>
        </section>
        {{-- Activities Section End --}}

        {{-- Package Section Start --}}
        <section class="py-7 w-full">
            <div class="max-w-full tablet:max-w-2xl laptop:max-w-4xl laptop-l:max-w-7xl mx-auto px-4 tablet:px-0 space-y-10">
                <div>
                    <div class="flex items-center space-x-3">
                        <div>
                            <x-icon.box-icon />
                        </div>
                        <div class="space-y-2">
                            <x-partials.guest.third-heading>
                                Grab our special package for you
                            </x-partials.guest.third-heading>
                        </div>
                    </div>
                    <p class="text-sm tablet:text-base font-medium text-[#7C7C7C]">
                        Here are some package that we have made special for you. Grab before it expires!
                    </p>
                </div>
                <div>
                    <x-partials.guest.orange-text-button href="#">
                        See More Recommended Package
                    </x-partials.guest.orange-text-button>
                </div>
            </div>
        </section>
        {{-- Package Section End --}}
    </main>
</x-layouts.guest.main-layout>
