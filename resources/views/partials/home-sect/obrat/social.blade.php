<!-- Раздел "Благодарности клиентов" -->
<section class="mt-[45px]">
    <div class="container mx-auto max-w-[1200px] px-4">

        <!-- Большие контейнеры -->
        <div class="flex justify-center relative flex-wrap lg:flex-nowrap gap-6">
            <!-- Big Container 1 -->
            <div class="w-full sm:w-[300px] md:w-[375px] h-[275px] sm:h-[440px] md:h-[550px] rounded-[10px] overflow-hidden big-image transition-all duration-300 ease-in-out"
                 id="big-image-1">
                <img src="{{ $thanks[0]->image ?? 'https://via.placeholder.com/375x550?text=Default' }}" alt="Big Image 1" class="w-full h-full object-cover">
            </div>

            <!-- Big Container 2 -->
            <div class="w-full sm:w-[300px] md:w-[375px] h-[275px] sm:h-[440px] md:h-[550px] rounded-[10px] overflow-hidden big-image transition-all duration-300 ease-in-out"
                 id="big-image-2">
                <img src="{{ $thanks[1]->image ?? 'https://via.placeholder.com/375x550?text=Default' }}" alt="Big Image 2" class="w-full h-full object-cover">
            </div>

            <!-- Big Container 3 -->
            <div class="w-full sm:w-[300px] md:w-[375px] h-[275px] sm:h-[440px] md:h-[550px] rounded-[10px] overflow-hidden big-image transition-all duration-300 ease-in-out"
                 id="big-image-3">
                <img src="{{ $thanks[2]->image ?? 'https://via.placeholder.com/375x550?text=Default' }}" alt="Big Image 3" class="w-full h-full object-cover">
            </div>

            <!-- Стрелки -->
            <button class="absolute left-[-60px] top-1/2 transform -translate-y-1/2 bg-white text-black w-[40px] h-[40px] rounded-full flex items-center justify-center hover:bg-black hover:text-white transition-colors z-10 hidden md:flex"
                    onclick="changeBigImages('left')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button class="absolute right-[-60px] top-1/2 transform -translate-y-1/2 bg-white text-black w-[40px] h-[40px] rounded-full flex items-center justify-center hover:bg-black hover:text-white transition-colors z-10 hidden md:flex"
                    onclick="changeBigImages('right')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Маленькие контейнеры -->
        <div class="flex justify-center space-x-[20px] mt-[20px] flex-wrap gap-4">
            @foreach ($thanks as $index => $thank)
                <div class="w-[50px] h-[70px] sm:w-[50px] sm:h-[70px] md:w-[70px] md:h-[90px] rounded-[10px] overflow-hidden small-image cursor-pointer"
                     onclick="updateBigImages({{ $index }})" data-index="{{ $index }}">
                    <img src="{{ $thank->image }}" alt="Social {{ $index + 1 }}" class="w-full h-full object-cover">
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    const totalImages = {{ count($thanks) }};
    const images = {!! json_encode($thanks->pluck('image')->toArray()) !!}; // Список URL-адресов изображений

    let currentIndex = 1; // Начинаем с MalCont2

    // Функция для обновления больших изображений
    function updateBigImages(index) {
        currentIndex = index;

        let leftIndex, centerIndex, rightIndex;

        if (index === 0) {
            // Исключение для MalCont1
            leftIndex = 0;
            centerIndex = 1;
            rightIndex = 2;
        } else if (index === totalImages - 1) {
            // Исключение для MalCont12
            leftIndex = totalImages - 3;
            centerIndex = totalImages - 2;
            rightIndex = totalImages - 1;
        } else {
            // Общий случай
            leftIndex = index - 1;
            centerIndex = index;
            rightIndex = index + 1;
        }

        // Обновляем большие изображения
        document.getElementById('big-image-1').querySelector('img').src = images[leftIndex];
        document.getElementById('big-image-2').querySelector('img').src = images[centerIndex];
        document.getElementById('big-image-3').querySelector('img').src = images[rightIndex];

        // Увеличиваем выбранные маленькие контейнеры
        resetSmallImageSizes();
        highlightSmallImages(leftIndex, centerIndex, rightIndex);
    }

    // Функция для сброса размеров всех маленьких изображений
    function resetSmallImageSizes() {
        document.querySelectorAll('.small-image').forEach(container => {
            container.style.transform = 'scale(1)';
            container.style.transition = 'transform 0.3s ease-in-out';
        });
    }

    // Функция для увеличения выбранных маленьких контейнеров
    function highlightSmallImages(leftIndex, centerIndex, rightIndex) {
        const containers = document.querySelectorAll('.small-image');
        containers[leftIndex].style.transform = 'scale(1.2)';
        containers[centerIndex].style.transform = 'scale(1.2)';
        containers[rightIndex].style.transform = 'scale(1.2)';
    }

    // Функция для переключения больших изображений
    function changeBigImages(direction) {
        if (direction === 'left') {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        } else if (direction === 'right') {
            currentIndex = (currentIndex + 1) % totalImages;
        }

        // Обновляем большие изображения
        updateBigImages(currentIndex);
    }

    // Инициализация начальных изображений
    document.addEventListener('DOMContentLoaded', () => {
        updateBigImages(currentIndex); // Начинаем с MalCont2
    });
</script>