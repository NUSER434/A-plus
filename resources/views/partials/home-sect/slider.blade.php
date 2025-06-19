<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/build/assets/app-tIW8ihUP.js" defer></script>
    
</head>
<body class="bg-gray-900">

@if(isset($sliders) && $sliders->count() > 0)
<div class="slider-container relative w-full h-[500px] bg-gray-700 overflow-hidden mt-16">

    <!-- Обёртка изображений -->
    <div class="slider-image-wrapper absolute left-0 top-0 w-[1178px] h-[500px] clip-trapezoid overflow-hidden">
        @foreach ($sliders as $index => $slider)
            <img src="{{ $slider->image_url }}" alt="Slide {{ $index + 1 }}"
                class="slider-image absolute top-0 left-0 w-full h-full object-cover opacity-0 transition-opacity duration-500 ease-in-out
                    {{ $index === 0 ? 'active opacity-100' : '' }}"
                data-index="{{ $index }}"
                data-title="{{ $slider->title }}"
                data-subtitle="{{ $slider->subtitle }}"
                data-button-text="{{ $slider->button_text }}"
                data-button-link="{{ $slider->button_link }}">
        @endforeach
    </div>

    <!-- Контейнер с информацией -->
    <div class="slider-content absolute inset-0 z-10 px-4
        lg:max-w-[1200px] lg:mx-auto lg:flex lg:justify-end lg:items-center">

        <div class="slider-info bg-gray-700 p-6 rounded-lg max-w-[375px] text-center text-white mx-auto lg:mx-0 lg:text-left transition-all duration-600 ease-out">

            <h1 id="slider-title"
                class="slider-title text-2xl font-bold mb-3 opacity-0 translate-y-5 transition-all duration-600 ease-out">
                {{ $sliders[0]->title }}
            </h1>

            <p id="slider-subtitle"
            class="slider-subtitle text-base opacity-0 translate-y-5 transition-all duration-600 ease-out sm:text-base xs:text-xs mt-[20px]">
                {{ $sliders[0]->subtitle }}
            </p>

            <a href="{{ $sliders[0]->button_link }}" id="slider-button"
            class="slider-button inline-block  mt-4 px-6 py-2 border-2 border-white text-white rounded transition-colors duration-300 hover:bg-white hover:text-black opacity-0 translate-y-5 transition-all duration-600 ease-out block  text-center mt-[20px]">
                {{ $sliders[0]->button_text }}
            </a>

        </div>
    </div>

</div>
@else
    <p class="text-white text-center mt-10">Нет доступных слайдов.</p>
@endif

</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.slider-image');
    let currentIndex = 0;

    const titleElement = document.getElementById('slider-title');
    const subtitleElement = document.getElementById('slider-subtitle');
    const buttonElement = document.getElementById('slider-button');

    function animateElements() {
        titleElement.classList.add('animate');
        subtitleElement.classList.add('animate');
        buttonElement.classList.add('animate');
    }

    function resetAnimation() {
        titleElement.classList.remove('animate');
        subtitleElement.classList.remove('animate');
        buttonElement.classList.remove('animate');
    }

    function showSlide(index) {
        resetAnimation();

        images.forEach((img, i) => {
            img.classList.toggle('active', i === index);
            img.style.opacity = i === index ? '1' : '0';
        });

        const currentSlide = images[index];
        setTimeout(() => {
            titleElement.textContent = currentSlide.dataset.title;
            subtitleElement.textContent = currentSlide.dataset.subtitle;
            buttonElement.textContent = currentSlide.dataset.buttonText;
            buttonElement.href = currentSlide.dataset.buttonLink;
            animateElements();
        }, 200); // Небольшая задержка перед анимацией текста
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        showSlide(currentIndex);
    }

    setInterval(nextSlide, 5000);

    // Инициализация первого слайда
    animateElements();
});
</script>
</html>
