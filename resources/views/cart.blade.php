<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - Корзина</title>
    <link rel="icon" type="" href="images/logo.png">
    <link rel="shortcut icon" type="" href="images/logo.png">
    <link rel="stylesheet" href="/build/assets/app-DR6pe9HW.css">
    <script src="/build/assets/app-DO02RcWZ.js" defer></script>
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

    <main class="max-w-[1200px] mx-auto mt-12">
    <!-- Левая часть: товары -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Ваш заказ</h2>
        <div class="space-y-4">
            @foreach ($orders as $order)
                <div class="flex justify-between items-start border border-gray-300 rounded-lg p-4 bg-white shadow-sm">
                    <div class="font-bold">{{ $order->service_type }}</div>
                    <span class="font-bold">{{ $order->price }} руб.</span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Правая часть: оформление заказа -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Форма оформления -->
        <div class="md:col-span-2 space-y-6">
            <form id="confirm-order" method="POST" action="{{ route('cart.confirm.order') }}">
                @csrf

        <!-- Способ доставки -->
        <div class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-800">Способ доставки</h3>
            <div class="flex flex-wrap gap-6">
                <label class="inline-flex items-center space-x-2 cursor-pointer p-3 rounded-lg border border-gray-300 transition hover:border-black">
                    <input type="radio" name="delivery_type" value="pickup" checked class="w-5 h-5 text-black focus:ring-black">
                    <span class="font-medium text-gray-700">Самовывоз</span>
                </label>

                <label class="inline-flex items-center space-x-2 cursor-pointer p-3 rounded-lg border border-gray-300 transition hover:border-black">
                    <input type="radio" name="delivery_type" value="delivery" class="w-5 h-5 text-black focus:ring-black">
                    <span class="font-medium text-gray-700">Доставка</span>
                </label>
            </div>

            <!-- Адрес самовывоза -->
            <div id="pickup-info" class="mt-2 hidden">
                <p class="text-sm text-gray-600">Адрес пункта выдачи: г. Москва, ул. Ленина, д. 5</p>
            </div>

            <!-- Поле адреса доставки -->
            <div id="delivery-address" class="mt-2 hidden">
                <label class="block text-sm font-medium text-gray-700 mb-1">Адрес доставки</label>
                <input type="text"
                       name="delivery_address"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition">
            </div>
        </div>

        <!-- Дата доставки -->
        <div class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-800">Дата доставки</h3>
            <div class="flex flex-wrap gap-4">
                @php
                    $today = now();
                    $dates = [];
                    for ($i = 0; $i < 5; $i++) {
                        $dates[] = $today->copy()->addDays($i);
                    }
                @endphp
                @foreach ($dates as $date)
                    <label class="inline-flex items-center space-x-2 cursor-pointer p-3 rounded-lg border border-gray-300 transition hover:border-black">
                        <input type="radio" name="delivery_date" value="{{ $date->format('Y-m-d') }}" class="w-5 h-5 text-black focus:ring-black">
                        <span class="font-medium text-gray-700">{{ $date->format('d M') }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Способ оплаты -->
        <div class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-800">Способ оплаты</h3>
            <div class="flex flex-wrap gap-6">
                <label class="inline-flex items-center space-x-2 cursor-pointer p-3 rounded-lg border border-gray-300 transition hover:border-black">
                    <input type="radio" name="payment_method" value="cash_on_delivery" checked class="w-5 h-5 text-black focus:ring-black payment-method">
                    <span class="font-medium text-gray-700">При получении</span>
                </label>

                <label class="inline-flex items-center space-x-2 cursor-pointer p-3 rounded-lg border border-gray-300 transition hover:border-black">
                    <input type="radio" name="payment_method" value="online_payment" class="w-5 h-5 text-black focus:ring-black payment-method">
                    <span class="font-medium text-gray-700">Сразу</span>
                </label>
            </div>

            <!-- При получении -->
            <div id="payment-cash-options" class="mt-4 space-y-3">
                <label class="inline-flex items-center space-x-2 cursor-pointer p-2 rounded hover:bg-gray-50">
                    <input type="radio" name="payment_type" value="card" class="w-4 h-4 text-black focus:ring-black">
                    <span class="text-gray-700">Банковской картой</span>
                </label>
                <label class="inline-flex items-center space-x-2 cursor-pointer p-2 rounded hover:bg-gray-50">
                    <input type="radio" name="payment_type" value="cash" class="w-4 h-4 text-black focus:ring-black">
                    <span class="text-gray-700">Наличными</span>
                </label>
            </div>

            <!-- Онлайн оплата -->
            <div id="payment-online-option" class="mt-4 hidden">
                <p class="text-sm text-gray-600">Вы будете перенаправлены на платёжный шлюз после подтверждения заказа.</p>
            </div>
        </div>

        <!-- Кнопка оформления -->
        <div class="mt-8">
            <button type="submit"
                    class="w-full bg-black text-white py-3 px-6 rounded-md hover:bg-gray-800 transition-colors duration-300 font-medium">
                Оформить заказ
            </button>
        </div>
            </form>
        </div>

        <!-- Итоговая цена -->
        <div class="bg-white border border-gray-300 rounded-lg p-6 shadow-sm">
            <h2 class="text-xl font-bold mb-4">Итого</h2>
            <div class="flex justify-between items-center mb-4">
                <span>Общая сумма:</span>
                <span class="font-bold">{{ $totalPrice }} руб.</span>
            </div>
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
    document.addEventListener('DOMContentLoaded', function () {
        const deliveryTypeRadios = document.querySelectorAll('input[name="delivery_type"]');
        const pickupInfo = document.getElementById('pickup-info');
        const deliveryAddress = document.getElementById('delivery-address');

        deliveryTypeRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.value === 'pickup') {
                    pickupInfo.classList.remove('hidden');
                    deliveryAddress.classList.add('hidden');
                } else {
                    pickupInfo.classList.add('hidden');
                    deliveryAddress.classList.remove('hidden');
                }
            });
        });

        const paymentMethodRadios = document.querySelectorAll('.payment-method');
        const cashOptions = document.getElementById('payment-cash-options');
        const onlineOption = document.getElementById('payment-online-option');

        paymentMethodRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.value === 'cash_on_delivery') {
                    cashOptions.classList.remove('hidden');
                    onlineOption.classList.add('hidden');
                } else {
                    cashOptions.classList.add('hidden');
                    onlineOption.classList.remove('hidden');
                }
            });
        });
    });
</script>

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
