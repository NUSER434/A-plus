<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - Первый шаг</title>
    <link rel="icon" type="" href="images/logo.png">
    <link rel="shortcut icon" type="" href="images/logo.png">
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
@include('partials.basic.header')

    <!-- Навигация -->
    <section class="mt-12">
        <div class="max-w-[1200px] mx-auto flex items-center space-x-4">
            <a href="{{ route('home') }}" class="text-black hover:text-red-500 transition duration-300">Главная</a>
            <span class="text-gray-400">|</span>
            <span class="text-black hover:text-red-500 transition duration-300">Контакты</span>
        </div>
    </section>

    <!-- Заголовок -->
    <div class="mt-[30px]">
        <div class="container mx-auto max-w-[1200px]">
            <h1 class="text-[28px] font-bold text-gray-900">Контакты типографии А плюс</h1>
        </div>
    </div>

@include('partials.contact.contact')

@include('partials.basic.footer')
@include('partials.buttons')
</body>
</html>