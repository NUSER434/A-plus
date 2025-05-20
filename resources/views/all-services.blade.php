<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - Первый шаг</title>
    <link rel="icon" type="" href="images/logo.png">
    <link rel="shortcut icon" type="" href="images/logo.png">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/build/assets/app-CImqi6kF.css">
    <script src="/build/assets/app-CiU_oirN" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
@include('partials.basic.header')

<main class="mt-[50px]">
    <!-- Навигация -->
    <div class="container mx-auto max-w-[1200px]">
        <div class="flex items-center space-x-2 text-gray-700">
            <a href="{{ route('home') }}" class="hover:text-black">Главная</a>
            <span>|</span>
            <span>Все услуги</span>
        </div>
    </div>

    <!-- Титл -->
    <div class="container mx-auto max-w-[1200px] mt-8">
        <h1 class="text-[28px] font-bold text-black hover:text-red-500 transition duration-300">Все услуги</h1>
    </div>

        <!-- Кнопки фильтрации -->
    <div class="container mx-auto max-w-[1200px] mt-8">
        <div class="flex flex-wrap gap-4">
            <button class="w-[100px] h-[40px] border border-black bg-transparent text-black hover:bg-black hover:text-white transition-all rounded-[10px] filter-button"
                data-category="Визитки" onclick="filterServices('Визитки')">Визитки</button>
            <button class="w-[200px] h-[40px] border border-black bg-transparent text-black hover:bg-black hover:text-white transition-all rounded-[10px] filter-button"
                data-category="Листовая полиграфия" onclick="filterServices('Листовая полиграфия')">Листовая полиграфия</button>
            <button class="w-[100px] h-[40px] border border-black bg-transparent text-black hover:bg-black hover:text-white transition-all rounded-[10px] filter-button"
                data-category="Одежда" onclick="filterServices('Одежда')">Одежда</button>
            <button class="w-[125px] h-[40px] border border-black bg-transparent text-black hover:bg-black hover:text-white transition-all rounded-[10px] filter-button"
                data-category="Календари" onclick="filterServices('Календари')">Календари</button>
            <button class="w-[125px] h-[40px] border border-black bg-transparent text-black hover:bg-black hover:text-white transition-all rounded-[10px] filter-button"
                data-category="Наклейки" onclick="filterServices('Наклейки')">Наклейки</button>
            <button class="w-[275px] h-[40px] border border-black bg-transparent text-black hover:bg-black hover:text-white transition-all rounded-[10px] filter-button"
                data-category="Многостраничная полиграфия" onclick="filterServices('Многостраничная полиграфия')">Многостраничная полиграфия</button>
            <button class="w-[125px] h-[40px] border border-black bg-transparent text-black hover:bg-black hover:text-white transition-all rounded-[10px] filter-button active"
                data-category="all" onclick="filterServices('all')">Все услуги</button>
        </div>
    </div>

    <!-- Контейнеры с услугами -->
    <div class="container mx-auto max-w-[1200px] mt-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-[20px]" id="services-container">
            @foreach ($services as $service)
                <a href="{{ route('all-services.show', $service->slug) }}" class="block w-[278px] h-[300px] rounded-lg overflow-hidden shadow-md service-card relative" data-category="{{ $service->category }}">
                    <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 w-full p-4">
                        <p class="text-white font-bold text" style="-webkit-text-stroke: 0.5px black;">{{ $service->name }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</main>

@include('partials.basic.footer')
@include('partials.buttons')


<script>

    // Функция для фильтрации услуг
function filterServices(category) {
    const buttons = document.querySelectorAll('.filter-button');
    const cards = document.querySelectorAll('.service-card');

    // Убираем активный класс у всех кнопок
    buttons.forEach(button => button.classList.remove('active'));

    // Добавляем активный класс к текущей кнопке
    const clickedButton = document.querySelector(`[data-category="${category}"]`);
    clickedButton.classList.add('active');

    // Фильтруем карточки
    cards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Инициализация фильтрации по умолчанию
document.addEventListener('DOMContentLoaded', () => {
    filterServices('all');
});
</script>
</body>
</html>
