<div class="w-full relative">
    <div class="overflow-hidden" id="container-slider-activities">
        <div class="flex flex-col items-stretch tablet:flex-row gap-4 static transition duration-700" id="slider-activities" >
            <x-partials.guest.trending-activities-card title="ATV Ride" image="https://www.bvrbaliholidayrentals.com/storage/images//65b7306c65bd3.JPG"/>
            <x-partials.guest.trending-activities-card title="Bali Zoo" image="https://www.bvrbaliholidayrentals.com/storage/images//657ffc460a3e2.jpg"/>
            <x-partials.guest.trending-activities-card title="Surfing" image="https://www.bvrbaliholidayrentals.com/storage/images//65b868b5761ff.png"/>
            <x-partials.guest.trending-activities-card title="Dirt Bike" image="https://www.bvrbaliholidayrentals.com/storage/images//65643a6e8352f.jpg"/>
            <x-partials.guest.trending-activities-card title="Water Sport" image="https://www.bvrbaliholidayrentals.com/storage/images//6560085a980f3.png"/>
            <x-partials.guest.trending-activities-card title="bali Safari" image="https://www.bvrbaliholidayrentals.com/storage/images//655ed4fd7baf3.jpg"/>
        </div>
    </div>
    <x-partials.guest.icon-slider id="btn-next-activities" />
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let sliderContainer = document.getElementById('container-slider-activities');
        let slider = document.getElementById('slider-activities');
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
        document.getElementById('btn-next-activities').addEventListener('click', next);
    });
</script>
