<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - О нас</title>
    <link rel="icon" type="" href="images/logo.png">
    <link rel="shortcut icon" type="" href="images/logo.png">
   <link rel="stylesheet" href="/build/assets/app-BXS_KchZ.css">
    <script src="/build/assets/app-CiU_oirN.js" defer></script>
    
</head>
<body>
@include('partials.basic.header')
    <!-- Навигация -->
    <section class="mt-12">
        <div class="max-w-[1200px] mx-auto flex items-center space-x-4">
            <a href="{{ route('home') }}" class="text-black hover:text-red-500 transition duration-300">Главная</a>
            <span class="text-gray-400">|</span>
            <p class="text-black hover:text-red-500 transition duration-300">О нас</p>
        </div>
    </section>


@include('partials.aboutet.who-are-we')
@include('partials.aboutet.values')
@include('partials.aboutet.our-way')    
@include('partials.feedback-module')    

@include('partials.basic.footer')

@include('partials.buttons')

<script src="{{ asset('js/about.js') }}"></script>


<style>
            /* Стиль для активной кнопки */
            .year-button.active {
                background-color: black;
                color: white;
            }
</style>
</body>
</html>
