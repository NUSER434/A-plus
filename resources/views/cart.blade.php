<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - Корзина</title>
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
            <span class="text-black hover:text-red-500 transition duration-300">Корзина</span>
        </div>
    </section>

    <!-- Титл -->
    <div class="container mx-auto max-w-[1200px] mt-8">
        <h1 class="text-4xl font-bold text-gray-900">Корзина</h1>
    </div>

    <main class="max-w-[1200px] mx-auto mt-12 flex gap-8">
    <!-- Левая часть: Контейнеры с услугами -->
    <div class="flex-1 space-y-4">

        @if ($orders->isEmpty())
            <p class="text-gray-500">Корзина пуста.</p>
        @else
        <form id="cart-form" method="POST" action="{{ route('cart.clear') }}">
                @csrf
                @foreach ($orders as $order)
                    <div class="flex justify-between items-start border border-gray-300 rounded-lg p-4 bg-white shadow-sm mt-[10px]">
                        <!-- Чекпоинт и информация о услуге -->
                        <div class="flex items-start space-x-4">
                            <input type="checkbox" name="selected[]" value="{{ $order->id }}" class="mt-2">
                            <div>
                                <div class="font-bold">{{ $order->service_type }}</div>
                                <div class="text-sm text-gray-600">
                                    Размер: {{ $order->size ?? 'Не указан' }}<br>
                                    Цвет: {{ $order->color ?? 'Не указан' }}<br>
                                    Тип бумаги: {{ $order->paper_type ?? 'Не указан' }}<br>
                                    Плотность бумаги: {{ $order->paper_density ?? 'Не указан' }}<br>
                                    Количество: {{ $order->quantity }}
                                </div>
                            </div>
                        </div>
                        <!-- Цена -->
                        <div class="text-right">
                            <span class="block font-bold">{{ $order->price }} руб.</span>
                        </div>
                    </div>
                @endforeach

                <!-- Кнопка "Очистить" -->
                <button type="button" class="w-[100px] border border-red-500 bg-transparent text-red-500 px-4 py-2 rounded hover:bg-red-500 hover:text-white transition duration-300 mt-[50px]" onclick="openModal()">
                    Очистить
                </button>
            </form>
        @endif
    </div>

    <!-- Правая часть: Общая цена и кнопка оформления -->
    <div class="w-[350px] space-y-4 mt-[10px]">
        <div class="border border-gray-300 rounded-lg p-4 bg-white shadow-sm">
            <h2 class="text-xl font-bold mb-4">Итого</h2>
            <div class="flex justify-between items-center mb-4">
                <span>Общая сумма:</span>
                <span class="font-bold">{{ $totalPrice }} руб.</span>
            </div>
            <form id="checkout-form" method="POST" action="{{ route('cart.checkout') }}">
                @csrf
                <button type="submit" class="border border-black bg-transparent text-black px-4 py-2 rounded hover:bg-black hover:text-white transition duration-300 w-full">
                    Оформить заказ
                </button>
            </form>
        </div>
    </div>
</main>

<!-- Модальное окно -->
<div id="confirmation-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
        <h2 class="text-xl font-bold mb-4">Подтверждение</h2>
        <p id="modal-message">Вы уверены, что хотите очистить корзину?</p>
        <div class="flex justify-end space-x-4 mt-6">
            <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition duration-300" onclick="closeModal()">Отмена</button>
            <button type="button" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300" onclick="submitForm()">Удалить</button>
        </div>
    </div>
</div>

@include('partials.basic.footer')
@include('partials.buttons')
</body>
</html>


<script>
    // Функция открытия модального окна
    function openModal() {
        const selectedCheckboxes = document.querySelectorAll('input[name="selected[]"]:checked');
        const modalMessage = document.getElementById('modal-message');

        if (selectedCheckboxes.length > 0) {
            modalMessage.textContent = 'Вы уверены, что хотите удалить выбранные услуги?';
        } else {
            modalMessage.textContent = 'Вы уверены, что хотите очистить всю корзину?';
        }

        document.getElementById('confirmation-modal').classList.remove('hidden');
    }

    // Функция закрытия модального окна
    function closeModal() {
        document.getElementById('confirmation-modal').classList.add('hidden');
    }

    // Функция отправки формы
    function submitForm() {
        document.getElementById('cart-form').submit();
        closeModal();
    }
</script>
