<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/assets/app-DgkL7R6B.css">
    <style>
        .mobile-menu.active {
              opacity: 1;
              visibility: visible;
            }
    </style>
</head>
<body>
<header class="site-header w-full">
    <!-- Верхняя часть -->
    <div class="top-header py-2.5">
        <div class="header-content mx-auto max-w-[1300px] px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-between gap-4">
            <!-- Логотип -->
            <a href="{{ route('home') }}" class="logo-container flex items-center gap-2.5 no-underline text-inherit">
                <img src="{{ asset('images/logo.png') }}" alt="Логотип"
                    class="logo-image w-[60px] h-[60px] sm:w-[75px] sm:h-[75px] animate-logo">

                <div class="text-container flex flex-col logo-text">
                    <!-- Типография -->
                    <p class="typo-text flex gap-0.5 text-gray-500 text-base">
                        <span class="letter opacity-0">Т</span>
                        <span class="letter opacity-0">и</span>
                        <span class="letter opacity-0">п</span>
                        <span class="letter opacity-0">о</span>
                        <span class="letter opacity-0">г</span>
                        <span class="letter opacity-0">р</span>
                        <span class="letter opacity-0">а</span>
                        <span class="letter opacity-0">ф</span>
                        <span class="letter opacity-0">и</span>
                        <span class="letter opacity-0">я</span>
                    </p>

                    <!-- А ПЛЮС -->
                    <p class="brand-text flex gap-0.5 text-black font-bold text-2xl">
                        <span class="letter opacity-0 delay-[400ms]">А</span>
                        <span class="letter opacity-0 delay-[500ms]">&nbsp;</span>
                        <span class="letter opacity-0 delay-[600ms]">П</span>
                        <span class="letter opacity-0 delay-[700ms]">Л</span>
                        <span class="letter opacity-0 delay-[800ms]">Ю</span>
                        <span class="letter opacity-0 delay-[900ms]">С</span>
                    </p>
                </div>
            </a>

            <!-- Блоки справа -->
            <div class="top-right flex grow justify-end items-center gap-4 sm:gap-6">
                <!-- Информационный блок -->
                <div class="info-block sm:flex flex-col font-normal text-sm">
                    <a href="tel:+73517773655" class="phone-animation flex justify-end text-black font-medium">
                        <span class="letter opacity-0 animate-letter-fadein">+</span>
                        <span class="letter opacity-0 animate-letter-fadein">7</span>
                        <span class="letter opacity-0 animate-letter-fadein">&nbsp;</span>
                        <span class="letter opacity-0 animate-letter-fadein">(351)</span>
                        <span class="letter opacity-0 animate-letter-fadein">&nbsp;777-36-55</span>
                    </a>
                    <p class="email-animation flex justify-end text-gray-500 text-xs">
                        <span class="letter opacity-0 animate-letter-fadein">a</span>
                        <span class="letter opacity-0 animate-letter-fadein">p</span>
                        <span class="letter opacity-0 animate-letter-fadein">l</span>
                        <span class="letter opacity-0 animate-letter-fadein">u</span>
                        <span class="letter opacity-0 animate-letter-fadein">s</span>
                        <span class="letter opacity-0 animate-letter-fadein">1</span>
                        <span class="letter opacity-0 animate-letter-fadein">7</span>
                        <span class="letter opacity-0 animate-letter-fadein">4</span>
                        <span class="letter opacity-0 animate-letter-fadein">@</span>
                        <span class="letter opacity-0 animate-letter-fadein">m</span>
                        <span class="letter opacity-0 animate-letter-fadein">a</span>
                        <span class="letter opacity-0 animate-letter-fadein">i</span>
                        <span class="letter opacity-0 animate-letter-fadein">l</span>
                        <span class="letter opacity-0 animate-letter-fadein">.</span>
                        <span class="letter opacity-0 animate-letter-fadein">r</span>
                        <span class="letter opacity-0 animate-letter-fadein">u</span>
                    </p>
                </div>

                <div class="socials">
                    <a href="https://wa.me/+79518048039" class="social-link inline-block">
                        <img src="{{ asset('images/messengers/headers/heder-wat.png') }}" alt="WhatsApp"
                            class="letter w-[40px] h-[40px] transition-transform duration-300 hover:scale-110 animate-social-icon"
                            style="animation-delay: 0ms;">
                    </a>
                    <a href="#" class="social-link inline-block">
                        <img src="{{ asset('images/messengers/headers/heder-tg.png') }}" alt="Telegram"
                            class="letter w-[40px] h-[40px] transition-transform duration-300 hover:scale-110 animate-social-icon"
                            style="animation-delay: 100ms;">
                    </a>
                    <a href="https://vk.com/aplus174" class="social-link inline-block">
                        <img src="{{ asset('images/messengers/headers/heder-vk.png') }}" alt="VK"
                            class="letter w-[40px] h-[40px] transition-transform duration-300 hover:scale-110 animate-social-icon"
                            style="animation-delay: 200ms;">
                    </a>
                </div>

                <!-- Поиск -->
                <div class="search-container relative inline-block">
                    <!-- Блок с полем ввода и кнопкой поиска -->
                    <div id="search-input-group" class="search-input-group flex w-[282px] h-[50px] border border-black rounded-lg overflow-hidden bg-white">
                        <input type="text" id="search-input"
                            class="search-input-field w-full px-3 border-none outline-none text-sm bg-transparent"
                            placeholder="Поиск...">
                        <div class="divider w-px h-[50px] bg-black"></div>
                        <button id="search-button" type="submit"
                                class="search-submit flex items-center justify-center w-[57px] h-full hover:bg-black transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                class="search-icon w-7 h-7 stroke-black transition-colors duration-300 hover:stroke-white">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Результаты поиска -->
                    <div id="search-results" class="search-results absolute left-0 mt-1 w-full max-h-[200px] overflow-y-auto bg-white border border-black border-t-0 z-10 hidden rounded-b-md">
                        <ul class="list-none text-sm m-0 p-0 px-4 py-2">
                            <li class="p-2 cursor-pointer hover:bg-gray-100">Результат 1</li>
                        </ul>
                    </div>
                </div>

                <!-- Бургер -->
                <button id="burger-menu" class="burger-menu md:hidden text-2xl bg-transparent border-none cursor-pointer">&#9776;</button>
            </div>
        </div>
    </div>

    <!-- Разделение между частями -->
    <div class="header-divider mx-auto max-w-[1300px] items-center h-px bg-gray-300"></div>

    <!-- Нижняя часть -->
    <div class="bottom-header py-2.5">
        <div class="header-content mx-auto max-w-[1300px] px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-between gap-4">
            <!-- Меню навигации -->
            <nav class="nav-left " aria-label="Основное меню">
                <ul class="flex list-none m-0 p-0 gap-6 sm:gap-8">
                    <li><a href="{{ route('home') }}" class="no-underline text-gray-700 text-base transition-all duration-300 hover:text-red-500 hover:scale-105">Главная</a></li>
                    <li><a href="{{ route('all-services.index') }}" class="no-underline text-gray-700 text-base transition-all duration-300 hover:text-red-500 hover:scale-105">Все услуги</a></li>
                    <li><a href="{{ route('about') }}" class="no-underline text-gray-700 text-base transition-all duration-300 hover:text-red-500 hover:scale-105">О нас</a></li>
                    <li><a href="{{ route('portfolio.index') }}" class="no-underline text-gray-700 text-base transition-all duration-300 hover:text-red-500 hover:scale-105">Портфолио</a></li>
                    <li><a href="{{ route('contacts') }}" class="no-underline text-gray-700 text-base transition-all duration-300 hover:text-red-500 hover:scale-105">Контакты</a></li>
                </ul>
            </nav>

            <div class="top-right flex grow justify-end items-center gap-4 sm:gap-6">
            <!-- Профиль -->
            @auth
            <div class="profile profile-authenticated flex ">
                <a href="{{ route('profile') }}">
                    <button class="btn btn-profile border border-black bg-transparent px-4 py-2.5 text-sm cursor-pointer transition-all duration-300 hover:bg-black hover:text-white w-[145px] h-[50px] rounded-tl-lg rounded-bl-lg animate-pop-in">
                        {{ Auth::user()->last_name }} {{ Auth::user()->first_name }}
                    </button>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-logout border border-black border-l-0 bg-transparent px-4 py-2.5 text-sm cursor-pointer transition-all duration-300 hover:bg-black hover:text-white w-[80px] h-[50px] rounded-tr-lg rounded-br-lg animate-pop-in">
                        Выход
                    </button>
                </form>
            </div>
            @else
            <div class="profile profile-guest flex">
                <a href="{{ route('register') }}">
                    <button class="btn btn-register border border-black bg-transparent px-4 py-2.5 text-sm cursor-pointer transition-all duration-300 hover:bg-black hover:text-white w-[145px] h-[50px] rounded-tl-lg rounded-bl-lg animate-pop-in">
                        Регистрация
                    </button>
                </a>
                <a href="{{ route('login') }}">
                    <button class="btn btn-login border border-black border-l-0 bg-transparent px-4 py-2.5 text-sm cursor-pointer transition-all duration-300 hover:bg-black hover:text-white w-[80px] h-[50px] rounded-tr-lg rounded-br-lg animate-pop-in">
                        Войти
                    </button>
                </a>
            </div>
            @endauth
                <!-- Корзина -->
            <div class="cart relative">
                <a href="{{ route('cart.index') }}">
                    <button class="btn btn-cart border border-black rounded-lg w-[103px] h-[50px] transition-all duration-300 hover:bg-black hover:text-white">
                        Корзина
                        <span class="absolute top-[-10px] right-[-10px] bg-red-500 text-white w-[20px] h-[20px] rounded-full flex items-center justify-center text-xs cart-counter opacity-0 animate-counter-scale">
                            {{ $cartCount ?? 0 }}
                        </span>
                    </button>
                </a>
            </div>
            </div>
        </div>
    </div>

        <!-- Бургер меню -->
        <div class="mobile-menu fixed inset-0 bg-black/80 z-[9999] flex items-center justify-center opacity-0 invisible transition-opacity duration-300">
            <div class="mobile-content w-full max-w-md h-[90vh] bg-white rounded-lg shadow-xl overflow-y-auto p-6 relative">
                <!-- Кнопка закрытия -->
                <button class="close-burger absolute top-2 right-2 text-2xl bg-transparent border-none cursor-pointer" aria-label="Закрыть меню">×</button>

                <!-- Мобильное меню навигации сверху -->
                <nav class="mobile-nav mb-6">
                    <ul class="list-none m-0 p-0 space-y-4 text-left">
                        <li><a href="{{ route('home') }}" class="no-underline text-gray-700 text-lg hover:text-red-500 transition-colors block py-2">Главная</a></li>
                        <li><a href="{{ route('all-services.index') }}" class="no-underline text-gray-700 text-lg hover:text-red-500 transition-colors block py-2">Все услуги</a></li>
                        <li><a href="{{ route('about') }}" class="no-underline text-gray-700 text-lg hover:text-red-500 transition-colors block py-2">О нас</a></li>
                        <li><a href="{{ route('portfolio.index') }}" class="no-underline text-gray-700 text-lg hover:text-red-500 transition-colors block py-2">Портфолио</a></li>
                        <li><a href="{{ route('contacts') }}" class="no-underline text-gray-700 text-lg hover:text-red-500 transition-colors block py-2">Контакты</a></li>
                    </ul>
                </nav>

                <!-- Информационный блок + Соцсети в одном ряду -->
                <div class="mobile-info-socials flex flex-col md:flex-row gap-6 mb-6">
                    <!-- Инфо-блок -->
                    <div class="mobile-info text-left flex-1">
                        <p class="phone-animation flex gap-1 text-sm text-gray-700">
                            @foreach(str_split("+7 (351) 777-36-55") as $letter)
                                <span class="letter opacity-0 animate-letter-fadein">{{ $letter }}</span>
                            @endforeach
                        </p>
                        <p class="email-animation flex gap-1 mt-2 text-sm text-gray-500">
                            @foreach(str_split("aplus174@mail.ru") as $letter)
                                <span class="letter opacity-0 animate-letter-fadein">{{ $letter }}</span>
                            @endforeach
                        </p>
                    </div>

                    <!-- Соцсети -->
                    <div class="mobile-socials flex gap-4 justify-center">
                        <a href="#"><img src="{{ asset('images/messengers/headers/heder-tg.png') }}" alt="Telegram" class="w-7 h-7 hover:scale-110 transition-transform"></a>
                        <a href="#"><img src="{{ asset('images/messengers/headers/heder-wat.png') }}" alt="WhatsApp" class="w-7 h-7 hover:scale-110 transition-transform"></a>
                        <a href="#"><img src="{{ asset('images/messengers/headers/heder-vk.png') }}" alt="VK" class="w-7 h-7 hover:scale-110 transition-transform"></a>
                    </div>
                </div>

                <!-- Профиль -->
                @auth
                <form method="POST" action="{{ route('logout') }}" class="mobile-logout mb-6">
                    @csrf
                    <button type="submit" class="btn btn-logout border border-black bg-transparent px-4 py-2.5 text-sm cursor-pointer transition-all duration-300 hover:bg-black hover:text-white w-full  rounded">
                        Выход
                    </button>
                </form>
                @else
                <div class="mobile-profile-buttons mb-6 grid gap-3">
                    <a href="{{ route('register') }}" class="btn btn-register border border-black bg-transparent px-4 py-2.5 text-sm cursor-pointer transition-all duration-300 hover:bg-black hover:text-white rounded">Регистрация</a>
                    <a href="{{ route('login') }}" class="btn btn-login border border-black bg-transparent px-4 py-2.5 text-sm cursor-pointer transition-all duration-300 hover:bg-black hover:text-white rounded">Войти</a>
                </div>
                @endauth

            </div>
        </div>
    </div>
    @auth
        @if(Auth::user()->role === 'admin')
            <div class="admin-nav header-content mx-auto max-w-[1300px] px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-between gap-4">
                <nav class="nav-left " aria-label="Основное меню">
                <ul class="flex list-none m-0 p-0 gap-6 sm:gap-8">
                    <li><a href="{{ route('admin.users') }}" class="no-underline text-gray-700 text-base transition-all duration-300 hover:text-red-500 hover:scale-105">Управление пользователями</a></li>
                    <li><a href="{{ route('admin.services') }}" class="no-underline text-gray-700 text-base transition-all duration-300 hover:text-red-500 hover:scale-105">Управление услугами</a></li>
                    <li><a href="{{ route('admin.orders') }}" class="no-underline text-gray-700 text-base transition-all duration-300 hover:text-red-500 hover:scale-105">Управление заказами</a></li>
                </ul>
            </nav>
            </div>
        @endif
    @endauth
</header>
</body>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const burgerBtn = document.getElementById('burger-menu');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeBtn = document.querySelector('.close-burger');

    if (!burgerBtn || !mobileMenu || !closeBtn) {
      console.error("Не найдены элементы для бургер-меню");
      return;
    }

    // Открытие меню
    burgerBtn.addEventListener('click', function (e) {
      e.stopPropagation(); // предотвращаем закрытие при клике на кнопку
      mobileMenu.classList.add('active');
    });

    // Закрытие по крестику
    closeBtn.addEventListener('click', function () {
      mobileMenu.classList.remove('active');
    });

    // Закрытие по клику вне контента
    mobileMenu.addEventListener('click', function (e) {
      if (e.target === mobileMenu) {
        mobileMenu.classList.remove('active');
      }
    });
  });
</script>
</html>
