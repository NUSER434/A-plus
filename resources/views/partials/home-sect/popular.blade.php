<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/build/assets/app-BS16X1jf.js" defer></script>
</head>
<body>
    <section class="">
        <div class="container mx-auto max-w-[1200px]">

            <!-- Контейнер кнопок -->
            <div class="flex flex-wrap justify-center gap-4 mb-[30px]">
                
                <button class="filter-button active-button grow-on-hover min-w-[120px] px-4 py-2 border border-black bg-transparent text-black font-medium rounded-md hover:bg-black hover:text-white transition-all"
                        onclick="showContent('popular')">
                    Популярное
                </button>
                <button class="filter-button grow-on-hover min-w-[180px] px-4 py-2 border border-black bg-transparent text-black font-medium rounded-md hover:bg-black hover:text-white transition-all"
                        onclick="showContent('special')">
                    Специальное предложение
                </button>
                <button class="filter-button grow-on-hover min-w-[150px] px-4 py-2 border border-black bg-transparent text-black font-medium rounded-md hover:bg-black hover:text-white transition-all"
                        onclick="openModal()">
                    Не знаете что выбрать?
                </button>
                <button class="filter-button grow-on-hover min-w-[200px] px-4 py-2 border border-black bg-transparent text-black font-medium rounded-md hover:bg-black hover:text-white transition-all"
                        onclick="showContent('why-us')">
                    Что вы получаете, сотрудничая с нами?
                </button>
                <a href="{{ route('all-services.index') }}" class="grow-on-hover w-full sm:w-auto min-w-[180px] px-4 py-2 border border-black bg-black text-white font-medium rounded-md hover:bg-transparent hover:text-black transition-all inline-flex items-center justify-center">
                    Смотреть все услуги
                </a>
            </div>

            <!-- Область вывода контента -->
            <div id="popular" class="content1 active">
                @include('partials.home-sect.popularity.popular')
            </div>
            <div id="special" class="content1 hidden">
                @include('partials.home-sect.popularity.special')
            </div>
            <div id="choose" class="content1 hidden">
            </div>
            <div id="why-us" class="content1 hidden">
                @include('partials.home-sect.popularity.why-us')
            </div>


            <!-- Модальное окно -->
            <div id="modal" class="fixed inset-0 bg-gradient-to-br from-gray-900/80 to-gray-900/80 backdrop-blur-sm flex justify-center items-center hidden z-50 p-4 overflow-y-auto max-h-screen">
                <div class="bg-white rounded-2xl shadow-2xl w-full max-w-[700px] transform scale-95 opacity-0 transition-all duration-500 modal-content relative overflow-hidden mx-auto my-8">
                    
                    <!-- Красный градиентный бар -->
                    <div class="h-2 bg-gradient-to-r from-red-500 via-rose-500 to-pink-700"></div>
                    
                    <div class="p-8 md:p-10 max-h-[70vh] overflow-y-auto">
                        <!-- Крестик закрытия -->
                        <button class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors duration-300 hover:scale-110"
                                onclick="closeModal()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <!-- Заголовок -->
                        <div class="flex items-center justify-center mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <h2 class="text-3xl font-bold text-gray-800">Не знаете что выбрать?</h2>
                        </div>

                        <!-- Форма -->
                        <form action="{{ route('submit.form') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                            @csrf

                            <!-- Блок с информацией -->
                            <div class="bg-gradient-to-r from-red-50 to-pink-50 p-6 rounded-xl border border-red-100 shadow-inner">
                                <p class="text-sm text-gray-600 mb-4">Заполните форму и наши специалисты свяжутся с вами в течение 15 минут</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Левая колонка -->
                                    <div class="space-y-5">
                                        @auth
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                    </svg>
                                                </div>
                                                <input type="text" value="{{ Auth::user()->first_name }}" readonly 
                                                    class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800">
                                                <input type="hidden" name="name" value="{{ Auth::user()->first_name }}">
                                            </div>
                                            
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                                <input type="email" value="{{ Auth::user()->email }}" readonly 
                                                    class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800">
                                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                        @else
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                    </svg>
                                                </div>
                                                <input type="text" name="name" id="name" placeholder="Ваше имя"
                                                    class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800">
                                            </div>
                                            
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                                <input type="email" name="email" id="email" placeholder="example@mail.com"
                                                    class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800">
                                            </div>
                                        @endauth
                                    </div>

                                    <!-- Правая колонка (без иконок) -->
                                    <div class="space-y-5">
                                        <div>
                                            <input type="file" name="file" id="file" accept="application/pdf"
                                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                                                        file:rounded-full file:border-0
                                                        file:text-sm file:font-semibold
                                                        file:bg-gray-50 file:text-gray-700
                                                        hover:file:bg-gray-300
                                                        focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500
                                                        rounded-lg border border-gray-300 cursor-pointer">
                                            <p class="mt-1 text-xs text-gray-500">PDF файл (до 10MB)</p>
                                        </div>

                                        <div>
                                            <textarea name="message" id="message" rows="4" placeholder="Опишите ваши пожелания..."
                                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Кнопка отправки -->
                            <div class="flex justify-center pt-4">
                                <button type="submit"
                                        class="group relative inline-flex items-center justify-center h-12 px-8 rounded-xl bg-white text-black border border-black font-medium overflow-hidden transition-all duration-300 hover:bg-black hover:text-white hover:shadow-lg hover:shadow-black/20 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2">
                                    <span class="relative z-10">Отправить запрос</span>
                                    <span class="absolute inset-0 bg-red-500 bg-opacity-20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Инициализация первого контента
        showContent('popular');

        // Подключаем закрытие модального окна по клику вне области
        setupModalClickOutside();

        // Обработчики для модального окна
        const openBtn = document.getElementById('open-modal-btn');
        if (openBtn) {
            openBtn.addEventListener('click', openModal);
        }

        const closeBtn = document.getElementById('close-modal-btn');
        if (closeBtn) {
            closeBtn.addEventListener('click', closeModal);
        }
    });

    // Функция отображения контента
    function showContent(id) {
        const contents = document.querySelectorAll('.content1');
        contents.forEach(content => {
            content.classList.add('hidden');
        });

        const activeContent = document.getElementById(id);
        if (activeContent) {
            activeContent.classList.remove('hidden');
        }

        // Можно также обновлять активный стиль кнопок:
        const buttons = document.querySelectorAll('.filter-button');
        buttons.forEach(button => {
            button.classList.remove('active-button');
            if (button.getAttribute('onclick') === `showContent('${id}')`) {
                button.classList.add('active-button');
            }
        });
    }

    // Заглушка для openModal и closeModal, если они ещё не определены
    function openModal() {
        const modal = document.getElementById('modal');
        if (modal) modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        if (modal) modal.classList.add('hidden');
    }

    function setupModalClickOutside() {
        const modal = document.getElementById('modal');
        if (!modal) return;

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        updateCartCounter();
    });
</script>
</body>
</html>
