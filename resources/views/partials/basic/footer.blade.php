<footer class="bg-gray-800 text-white py-[45px] mt-[60px]">
    <div class="container mx-auto max-w-[1200px] px-4">
        <!-- Блоки -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[30px]">
            <!-- 1 Часть: Логотип, способы оплаты и соцсети -->
            <div class="w-full space-y-4">
                <!-- Логотип -->
                <div class="flex items-center space-x-4 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[75px] h-[75px] transition-transform duration-300 rounded-full">
                    <div class="text-left">
                        <p class="text-base">Типография</p>
                        <p class="text-2xl font-bold">А - Плюс</p>
                    </div>
                </div>

                <!-- Способы оплаты -->
                <div class="grid grid-cols-3 gap-[12px]">
                    <a href="#" target="_blank"><img src="{{ asset('images/payment/visa.png') }}" alt="Visa" class="w-[60px] h-[45px]"></a>
                    <a href="#" target="_blank"><img src="{{ asset('images/payment/mast.png') }}" alt="MasterCard" class="w-[60px] h-[45px]"></a>
                    <a href="#" target="_blank"><img src="{{ asset('images/payment/apppay.png') }}" alt="Apple Pay" class="w-[60px] h-[45px]"></a>
                </div>

                <!-- Социальные сети -->
                <div class="flex space-x-[15px]">
                    <a href="#" target="_blank" class="group">
                        <img src="{{ asset('images/messengers/mes-icon/wat.png') }}" alt="Whatsapp" class="w-[35px] h-[35px] transition-transform duration-300 group-hover:scale-110">
                    </a>
                    <a href="#" target="_blank" class="group">
                        <img src="{{ asset('images/messengers/mes-icon/tg.png') }}" alt="Telegram" class="w-[35px] h-[35px] transition-transform duration-300 group-hover:scale-110">
                    </a>
                    <a href="https://vk.com/aplus174" target="_blank" class="group">
                        <img src="{{ asset('images/messengers/mes-icon/vk.png') }}" alt="VK" class="w-[35px] h-[35px] transition-transform duration-300 group-hover:scale-110">
                    </a>
                    <a href="#" target="_blank" class="group">
                        <img src="{{ asset('images/messengers/mes-icon/you.png') }}" alt="YouTube" class="w-[35px] h-[35px] transition-transform duration-300 group-hover:scale-110">
                    </a>
                    <a href="#" target="_blank" class="group">
                        <img src="" alt="Dzen" class="w-[35px] h-[35px] transition-transform duration-300 group-hover:scale-110">
                    </a>
                </div>
            </div>

            <!-- 2 Часть: Контакты -->
            <div class="space-y-4">
                <h3 class="text-lg font-bold">Контакты</h3>
                <div class="space-y-2">
                    <p><a href="tel:+73517773655" class="text-base hover:text-red-500 transition-colors">+7 (351) 777-36-55</a></p>
                    <p class="text-xs text-gray-400">Бесплатно по РФ</p>
                    <p><a href="tel:+79518048039" class="text-base hover:text-red-500 transition-colors">+7 (951) 804-80-39</a></p>
                    <p class="text-xs text-gray-400">Бесплатно по РФ</p>
                    <p><a href="mailto:aplus174@mail.ru" class="text-base hover:text-red-500 transition-colors">aplus174@mail.ru</a></p>
                    <p class="text-base hover:text-red-500 transition-colors">454016, г. Челябинск, ул. Братьев Кашириных, д. 73</p>
                    <p class="text-base hover:text-red-500 transition-colors">Остановка «Полковая», рядом с Лентой</p>
                </div>
            </div>

            <!-- 3 Часть: Информация -->
            <div class="space-y-4">
                <h3 class="text-lg font-bold">Информация</h3>
                <ul class="space-y-2">
                    <li><a href="/contacts" class="text-base text-gray-400 hover:text-white transition-colors block">Контакты</a></li>
                    <li><a href="/about" class="text-base text-gray-400 hover:text-white transition-colors block">О нас</a></li>
                    <li><a href="#" class="text-base text-gray-400 hover:text-white transition-colors block">Пользовательское соглашение</a></li>
                    <li><a href="#" class="text-base text-gray-400 hover:text-white transition-colors block">Публичная оферта</a></li>
                    <li><a href="#" class="text-base text-gray-400 hover:text-white transition-colors block">Переделка и возврат</a></li>
                </ul>
            </div>

            <!-- 4 Часть: Популярные услуги -->
            <div class="space-y-4">
                <h3 class="text-lg font-bold">Популярные услуги</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-base text-gray-400 hover:text-white transition-colors block">Печать визиток</a></li>
                    <li><a href="#" class="text-base text-gray-400 hover:text-white transition-colors block">Листовок</a></li>
                    <li><a href="#" class="text-base text-gray-400 hover:text-white transition-colors block">Календари</a></li>
                    <li><a href="#" class="text-base text-gray-400 hover:text-white transition-colors block">Нанесение на спецодежду</a></li>
                    <li><a href="/all-services" class="text-base text-gray-400 hover:text-white transition-colors block">Все услуги</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="mt-[45px] border-t border-gray-700 pt-[20px]">
        <div class="container mx-auto max-w-[1200px] px-4 text-center text-sm text-gray-400">
            Copyright © 2024 aplus174.ru
        </div>
    </div>
</footer>
