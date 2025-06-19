<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - Главаня страница</title>
    <link rel="icon" type="" href="images/logo.png">
    <link rel="shortcut icon" type="" href="images/logo.png">
    <link rel="stylesheet" href="/build/assets/app-DhnIsgT-.css">
    <script src="/build/assets/app-BS16X1jf.js" defer></script>
</head>
<body class="">
@include('partials.basic.header')


@include('partials.home-sect.slider', ['sliders' => $sliders])

<!-- Раздел "Слоган" -->
<section class="max-w-[1200px] mx-auto py-16">
    <h2 class="text-[28px] font-bold text-black hover:text-red-500 transition duration-300">
        А плюс - От эскиза до тиража — воплощаем ваши идеи в безупречной печати!
    </h2>
</section>

<!-- Раздел "Популярное" -->
@include('partials.home-sect.popular')

<!-- Раздел "Быстрый заказ" -->
<section class="w-full bg-gray-700 h-[200px] flex items-center justify-center mt-[60px]">
    <div class="max-w-[1200px] mx-auto text-center">
        <p class="text-white text-lg mb-4">Не нашли то что искали? Оставьте заявку на “Быстрый заказ”</p>
            <a onclick="openModal()" class="inline-block px-6 py-3 border border-white text-white rounded  hover:bg-white hover:text-black transition duration-300">
                Быстрый заказ
            </a>
    </div>
</section>


<!-- Раздел "Портфолио" -->
@include('partials.portfolio-module', ['portfolios' => $portfolios])
<!-- Обратная связь -->
@include('partials.feedback-module', ['portfolios' => $portfolios])
<!-- Подвал -->
@include('partials.basic.footer')


@include('partials.buttons')

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Инициализация первого контента
    showContent('popular');

    // Подключаем закрытие модального окна по клику вне области
    setupModalClickOutside();

    // Можно также назначить openModal / closeModal на кнопки
    // Например:
    const openBtn = document.getElementById('open-modal-btn');
    if (openBtn) {
        openBtn.addEventListener('click', openModal);
    }

    const closeBtn = document.getElementById('close-modal-btn');
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }
});

document.addEventListener('DOMContentLoaded', function () {
    updateCartCounter();
});
</script>
</body>
</html>
