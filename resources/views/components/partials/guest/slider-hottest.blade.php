@props(['$accomodations'])
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
