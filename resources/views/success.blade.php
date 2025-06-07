<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - Главаня страница</title>
    <link rel="icon" type="" href="images/logo.png">
    <link rel="shortcut icon" type="" href="images/logo.png">
</head>
<body>
@include('partials.basic.header')

<!-- Навигация -->
    <section class="mt-12">
        <div class="max-w-[1200px] mx-auto flex items-center space-x-4">
            <a href="{{ route('home') }}" class="text-black hover:text-red-500 transition duration-300">Главная</a>
            <span class="text-gray-400">|</span>
            <p class="text-black hover:text-red-500 transition duration-300">Заказ</p>
        </div>
    </section>

    <!-- Заголовок -->
    <div class="mt-[30px]">
        <div class="container mx-auto max-w-[1200px]">
            <h1 class="text-[28px] font-bold text-black hover:text-red-500 transition duration-300">Заказ успешно оформлен!</h1>
        </div>
    </div>

<section class="container mx-auto max-w-[1200px] mt-[30px]">

<div class="text-center mt-10">
        <h1 class="text-3xl font-bold text-green-600">Заказ успешно оформлен!</h1>
        <p class="mt-4">Спасибо за покупку. Мы свяжемся с вами в ближайшее время.</p>
        <a href="/home" class="inline-block mt-4 text-blue-500 hover:underline">Вернуться на главную</a>
    </div>

</section>

@include('partials.basic.footer')
</body>
</html>