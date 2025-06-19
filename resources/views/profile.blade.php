<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - Профиль</title>
    <link rel="icon" type="" href="images/logo.png">
    <link rel="shortcut icon" type="" href="images/logo.png">
    <link rel="stylesheet" href="/build/assets/app-DgkL7R6B.css">
    <script src="/build/assets/app-tIW8ihUP.js" defer></script>
      
</head>
<body>
    @include('partials.basic.header')
    <!-- Навигация -->
    <section class="mt-12">
        <div class="max-w-[1200px] mx-auto flex items-center space-x-4">
            <a href="{{ route('home') }}" class="text-black hover:text-red-500 transition duration-300">Главная</a>
            <span class="text-gray-400">|</span>
            <span class="text-black hover:text-red-500 transition duration-300">Профиль</span>
        </div>
    </section>

    <section class="container mx-auto max-w-[1200px] mt-8">
    <h1 class="text-[28px] font-bold text-black hover:text-red-500 transition duration-300 mb-6">Профиль</h1>
    <!-- Кнопки фильтрации -->
    <div class="flex justify-center flex-wrap gap-4 mb-6">
        <button class="profile-filter-btn w-full sm:w-auto h-[40px] px-10 border border-black bg-transparent text-black font-medium rounded-md hover:bg-black hover:text-white transition-all"
            onclick="showProfileContent('personal')">Личная информация</button>
        <button class="profile-filter-btn w-full sm:w-auto h-[40px] px-10 border border-black bg-transparent text-black font-medium rounded-md hover:bg-black hover:text-white transition-all"
            onclick="showProfileContent('history')">История</button>
    </div>

    <div id="personal" class="profile-content-section hidden">
        @include('partials.profile.personal')
    </div>
    <div id="history" class="profile-content-section hidden">
    @include('partials.profile.history', ['requests' => $requests])
    </div>

</section>



@include('partials.basic.footer')
@include('partials.buttons')

<script>
// Логика для модального окна
const deleteModal = document.getElementById('delete-modal');
const deleteBtn = document.getElementById('delete-account-btn');
const closeModalBtn = document.getElementById('close-modal-btn');

deleteBtn.addEventListener('click', () => {
    deleteModal.classList.remove('hidden');
});

closeModalBtn.addEventListener('click', () => {
    deleteModal.classList.add('hidden');
});

// Функция переключения разделов профиля
window.showProfileContent = function (contentId) {
    // Скрыть все секции
    document.querySelectorAll(".profile-content-section").forEach((section) => {
        section.classList.add("hidden");
    });

    // Убрать активный класс у всех кнопок
    document.querySelectorAll(".profile-filter-btn").forEach((btn) => {
        btn.classList.remove("active");
    });

    // Показать нужную секцию
    const targetSection = document.getElementById(contentId);
    if (targetSection) {
        targetSection.classList.remove("hidden");

        // Найти соответствующую кнопку и сделать её активной
        const activeButton = document.querySelector(`.profile-filter-btn[data-target="${contentId}"]`);
        if (activeButton) activeButton.classList.add("active");
    }
};

// Инициализация: показываем "Личная информация" по умолчанию
document.addEventListener("DOMContentLoaded", () => {
    const defaultButton = document.querySelector('.profile-filter-btn[data-target="personal"]');
    if (defaultButton) {
        defaultButton.click();
    }
});

// Прогресс бары (оставляем как есть)
function updateOrderStatus() {
    document.querySelectorAll('.progress-bar').forEach(bar => {
        const currentWidth = parseFloat(bar.style.width);
        const orderId = bar.dataset.orderId;

        if (currentWidth < 33) {
            bar.style.width = '33%';
        } else if (currentWidth < 66) {
            bar.style.width = '66%';
        } else if (currentWidth < 100) {
            bar.style.width = '100%';
        } else {
            clearInterval(window[`interval_${orderId}`]);
        }
    });
}

document.querySelectorAll('.progress-bar').forEach(bar => {
    const orderId = bar.dataset.orderId;
    window[`interval_${orderId}`] = setInterval(updateOrderStatus, 3000);
});
</script>
</body>
</html>
