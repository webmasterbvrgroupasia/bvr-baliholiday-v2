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
                <div class="max-w-full tablet:max-w-2xl laptop:max-w-4xl laptop-l:max-w-7xl mx-auto px-4 tablet:px-0">
                    <div class="flex gap-x-2">
                        <x-partials.guest.btn-tab-accomodations title="Canggu" active="{{ true }}"  />
                        <x-partials.guest.btn-tab-accomodations title="Seminyak" active="{{ false }}" />
                        <x-partials.guest.btn-tab-accomodations title="Sanur" active="{{ false }}" />
                        <x-partials.guest.btn-tab-accomodations title="Jimbaran" active="{{ false }}" />
                        <x-partials.guest.btn-tab-accomodations title="Kintamani" active="{{ false }}" />
                    </div>
                </div>
                <div class="w-full relative">
                    <div class="overflow-hidden" id="slider-container-accomodations">
                        <div class="flex flex-col items-stretch tablet:flex-row gap-4 static transition duration-700" id="slider-accomodations">
                            @foreach($accomodations as $accomodation)
                                <x-partials.guest.accomodation-card
                                    href=""
                                    propertyImage="{{ $accomodation['property_image'] }}"
                                    accomodationName="{{ $accomodation['accomodation_name'] }}"
                                    accomodationLocation="{{ $accomodation['accomodation_location'] }}"
                                    nearbyLocation="{{ $accomodation['nearby_location'] }}"
                                    oldPrice="{{ $accomodation['old_price'] }}"
                                    currentPrice="{{ $accomodation['current_price'] }}"
                                />
                            @endforeach
                        </div>
                    </div>
                    <x-partials.guest.icon-slider id="btn-next-accomodations"/>
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
                <x-partials.guest.slider-activities />
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
                <div class="flex flex-col tablet:flex-row gap-4">
                    <x-partials.guest.promo-card promoImage="https://ik.imagekit.io/tvlk/image/imageResource/2024/04/03/1712115467746-43d8a7d781a6c5e16f40483552bdc2e8.png?tr=dpr-2,q-75,w-1280"/>
                    <x-partials.guest.promo-card promoImage="https://ik.imagekit.io/tvlk/image/imageResource/2024/05/31/1717142432380-b725bc104e57cc1ff950bbc63362e871.png?tr=q-75"/>
                </div>
                <div>
                    <x-partials.guest.orange-text-button href="#">
                        See More Recommended Package
                    </x-partials.guest.orange-text-button>
                </div>
            </div>
        </section>
        {{-- Package Section End --}}
        <section class="py-7 w-full">
            <div class="max-w-full tablet:max-w-2xl laptop:max-w-4xl laptop-l:max-w-7xl mx-auto px-4 tablet:px-0 space-y-10">
                <div>
                    <div class="flex items-center space-x-3">
                        <div>
                            <x-icon.youtube-icon />
                        </div>
                        <div class="space-y-2">
                            <x-partials.guest.third-heading>
                                Check our videos
                            </x-partials.guest.third-heading>
                        </div>
                    </div>
                    <p class="text-sm tablet:text-base font-medium text-[#7C7C7C]">
                        Here are some of our videos for you to gain your insight
                    </p>
                </div>
                <div class="flex flex-col tablet:flex-row gap-4">

                </div>
                <div>
                    <x-partials.guest.orange-text-button href="#">
                        See More Recommended Package
                    </x-partials.guest.orange-text-button>
                </div>
            </div>
        </section>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let sliderContainer = document.getElementById('slider-container-accomodations');
            let slider = document.getElementById('slider-accomodations');
            let cards = slider.children;
            let elementsToShow = 4;
            let sliderContainerWidth = sliderContainer.clientWidth;
            let cardWidth = sliderContainerWidth / elementsToShow;
            let currentIndex = 0;

            slider.style.width = cards.length * cardWidth + 'px';

            function next() {
                if (currentIndex < cards.length - elementsToShow) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            }


            document.getElementById('btn-next-accomodations').addEventListener('click', next);

        });
    </script>
</x-layouts.guest.main-layout>
