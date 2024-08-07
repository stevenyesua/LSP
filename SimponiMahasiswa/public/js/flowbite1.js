document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('#default-carousel');
    const items = document.querySelectorAll('[data-carousel-item]');
    const totalItems = items.length;
    let currentIndex = 0;

    // Create indicators
    const indicatorsContainer = document.querySelector('[data-carousel="slide"] .absolute.z-30.flex');
    items.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className = 'w-3 h-3 rounded-full bg-gray-400';
        dot.setAttribute('aria-label', `Slide ${i + 1}`);
        dot.dataset.carouselSlideTo = i;
        indicatorsContainer.appendChild(dot);
    });

    const indicators = document.querySelectorAll('[data-carousel="slide"] .absolute.z-30.flex button');

    function updateIndicators(index) {
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('bg-gray-700', i === index);
            indicator.classList.toggle('bg-gray-400', i !== index);
        });
    }

    function showSlide(index) {
        items.forEach((item, i) => {
            if (i === index) {
                item.classList.remove('opacity-0');
                item.classList.add('opacity-100');
            } else {
                item.classList.remove('opacity-100');
                item.classList.add('opacity-0');
            }
        });
        updateIndicators(index);
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        showSlide(currentIndex);
    }

    document.querySelector('[data-carousel-next]').addEventListener('click', nextSlide);
    document.querySelector('[data-carousel-prev]').addEventListener('click', prevSlide);

    indicators.forEach(indicator => {
        indicator.addEventListener('click', function() {
            const slideIndex = parseInt(this.dataset.carouselSlideTo, 10);
            currentIndex = slideIndex;
            showSlide(slideIndex);
        });
    });

    // Initialize carousel
    showSlide(currentIndex);

    // Automatic sliding
    setInterval(nextSlide, 5000); // Change slide every 5 seconds
});