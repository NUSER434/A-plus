<!-- Основная часть -->
<section class="mt-[50px]">
        <div class="container mx-auto max-w-[1200px] px-4">
            <!-- Карта и адреса -->
            <div class="flex items-start space-x-[70px]">
                <!-- Карта -->
                <div class="w-[800px] h-[400px] rounded-[10px] overflow-hidden shadow-md">
                    <iframe src="https://yandex.ru/map-widget/v1/?ll=61.378560%2C55.174764&mode=search&oid=1187526621&ol=biz&z=16.25" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <!-- Адреса -->
                <div class="w-[300px] h-[400px] space-y-[20px]">
                    <h3 class="text-lg font-semibold text-gray-900">Адрес</h3>
                    <p class="text-base text-gray-700 leading-relaxed hover:text-red-500">
                    <span class="text-gray-900 font-medium">Дополнительно: </span>В офисе есть каталоги материалов, образцы продукции, мягкие кресла.
                    </p>
                    <p class="text-base text-gray-700 leading-relaxed hover:text-red-500">
                        <span class="text-gray-900 font-medium">Менеджеры и офис:</span> <br> Пн - Пт: 09:00 - 18:00. <br> Сб, Вс: Офис не работает!
                    </p>
                    <p class="text-base text-gray-700 leading-relaxed hover:text-red-500">
                        <span class="text-gray-900 font-medium ">Адрес:</span> 454016, г. Челябинск, ул. Братьев Кашириных, д. 73, 1 этаж, офис 6
                    </p>
                    <p class="text-base text-gray-700 leading-relaxed hover:text-red-500">
                        Остановка общ.транспорта «Полковая» отдельно стоящее красное кирпичное здание (рядом гипермаркет Лента).
                    </p>
                </div>
            </div>

            <!-- Форма и контакты -->
            <div class="flex items-start mt-[50px] space-x-[100px]">
                <!-- Форма "Задайте мне вопрос" -->
                <div class="w-[770px] space-y-[20px]">
                    <h3 class="text-lg font-semibold text-gray-900">Задайте нам вопрос</h3>
                    <input type="text" placeholder="Ваше имя" class="w-[370px] h-[40px] px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <input type="text" placeholder="Ваш номер телефона" class="w-[370px] h-[40px] px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 ml-[25px]">
                    <input type="text" placeholder="Как с вами лучше связаться? (WhatsApp, Telegram, E-mail, Телефон)" class="w-[770px] h-[40px] px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <div class="  flex items-center space-x-2 text-sm text-gray-500">
                        <div class="w-[550px] h-[35px] ml-[30px]">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-500">
                        <label class="ml-[25px]">Нажимая кнопку «Отправить», я даю согласие на обработку персональных данных в соответствии с правилами сайта.</label>
                        </div>
                        <button class="w-[200px] h-[50px] bg-white border border-black text-black font-medium rounded-md hover:bg-black hover:text-white transition-colors">
                        Отправить
                    </button>
                    </div>
                </div>

                <!-- Контакты -->
                <div class="w-[300px] space-y-[20px]">
                    <h3 class="text-lg font-semibold text-gray-900">Контакты</h3>
                    <div class="space-y-[10px]">
                    <div class="flex items-center space-y-2">
                        <a href="tel:+73517773655" class="text-base font-medium hover:text-red-500">+7 (351) 777-36-55</a>
                        <p class="text-xs text-gray-400 ml-[35px]">Бесплатно по РФ</p>
                    </div>
                    <div class="flex items-center space-y-2">
                        <a href="tel:+79518048039" class="text-base font-medium hover:text-red-500">+7 (951) 804-80-39</a>
                        <p class="text-xs text-gray-400 ml-[35px]">Бесплатно по РФ</p>
                    </div>
                    </div>
                    <p class="text-base text-gray-700 leading-relaxed hover:text-rose-500 transition duration-300">
                        aplus174@mail.ru
                    </p>
                    <p class="text-base text-gray-700 leading-relaxed hover:text-red-500">
                        <span class="text-gray-900 font-medium">Отвечаем на звонки и письма:</span> <br> Пн - Пт: 09:00 - 18:00. <br> Сб, Вс: Офис не работает!
                    </p>
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
            </div>
        </div>
    </section>
