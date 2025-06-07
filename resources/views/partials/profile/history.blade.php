<div id="history" class="profile-content-section hidden">
    <div class="space-y-6">
        <!-- История вопросов -->
        <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl">
            <h2 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 0h6m4 0h2m-6 4h4m2 0h2m-6-8h6m-6 0h6m4 0h2" />
                </svg>
                История вопросов
            </h2>
            @if ($requests->isEmpty())
                <p class="text-gray-500">У вас нет запросов.</p>
            @else
                <div class="space-y-4">
                    @foreach ($requests as $request)
                        <div class="border border-gray-300 rounded-lg p-4">
                            <p><strong>Сообщение:</strong> {{ $request->message }}</p>
                            <p><strong>Email:</strong> {{ $request->email }}</p>
                            <p><strong>Дата:</strong> {{ $request->created_at->format('d.m.Y H:i') }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- История заказов -->
        <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl">
            <h2 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.657 0 3-.895 3-2s-1.343-2-3-2-3 .895-3 2 1.343 2 3 2z" />
                </svg>
                История заказов
            </h2>

            @if ($orders->isEmpty())
                <p class="text-gray-500">У вас нет заказов.</p>
            @else
                <div class="space-y-6">
                    @foreach ($orders as $order)
                    <div class="border border-gray-200 rounded-lg p-4 relative">
                        <!-- Информация о заказе -->
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4">
                            <div>
                                <p class="font-medium">{{ $order->service_type }}</p>
                                <p class="text-sm text-gray-500">
                                    {{ $order->quantity }} шт • {{ number_format($order->price, 2) }} ₽
                                </p>
                            </div>
                            <div class="mt-2 sm:mt-0">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full 
                                    {{ $order->status == 'in_progress' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                    {{ $order->status == 'final_stages' ? 'bg-blue-100 text-blue-800' : '' }}
                                    {{ $order->status == 'completed' ? 'bg-green-100 text-green-800' : '' }}">
                                    {{ match($order->status) {
                                        'in_progress' => 'В разработке',
                                        'final_stages' => 'На финальных этапах',
                                        'completed' => 'Выполнен',
                                        default => 'Неизвестный статус',
                                    } }}
                                </span>
                            </div>
                        </div>

                        <!-- Прогресс-бар -->
                        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                            <div class="progress-bar bg-gradient-to-r from-red-500 via-rose-500 to-pink-600 h-2.5 rounded-full transition-all duration-1000 ease-in-out"
                                style="width: {{ match($order->status) {
                                    'in_progress' => '33%',
                                    'final_stages' => '66%',
                                    'completed' => '100%',
                                    default => '0%',
                                } }}"
                                data-order-id="{{ $order->id }}">
                            </div>
                        </div>

                        <!-- Детали заказа -->
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 text-xs text-gray-600 mt-2">
                            @if ($order->size)
                                <div><span class="font-medium">Размер:</span> {{ $order->size }}</div>
                            @endif
                            @if ($order->color)
                                <div><span class="font-medium">Цвет:</span> {{ $order->color }}</div>
                            @endif
                            @if ($order->paper_type)
                                <div><span class="font-medium">Бумага:</span> {{ $order->paper_type }}</div>
                            @endif
                            @if ($order->fabric_type)
                                <div><span class="font-medium">Ткань:</span> {{ $order->fabric_type }}</div>
                            @endif
                            @if ($order->print_type)
                                <div><span class="font-medium">Печать:</span> {{ $order->print_type }}</div>
                            @endif
                        </div>

                        <!-- Данные оформления (доставка, оплата) -->
                        @if ($order->orderDetail)
                            <div class="mt-4 pt-4 border-t border-gray-100 text-sm text-gray-700 space-y-2">
                                <p><span class="font-medium">Способ доставки:</span>
                                    {{ $order->orderDetail->delivery_type == 'pickup' ? 'Самовывоз' : 'Доставка' }}
                                </p>
                                @if ($order->orderDetail->delivery_address)
                                    <p><span class="font-medium">Адрес:</span> {{ $order->orderDetail->delivery_address }}</p>
                                @endif
                                @if ($order->orderDetail->delivery_date)
                                    <p><span class="font-medium">Дата доставки:</span> {{ \Carbon\Carbon::parse($order->orderDetail->delivery_date)->format('d.m.Y') }}</p>
                                @endif
                                <p><span class="font-medium">Оплата:</span>
                                    {{ $order->orderDetail->payment_method == 'cash_on_delivery' ? 'При получении' : ($order->orderDetail->payment_method == 'online_payment' ? 'Онлайн картой' : $order->orderDetail->payment_method) }}
                                </p>
                            </div>
                        @endif
                    </div>
                @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
