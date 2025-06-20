<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\CompletedOrder;
use App\Models\OrderDetail;

class CartController extends Controller
{
    // Отображение корзины
    public function index()
    {
        $user = Auth::user();
        $orders = $user ? $user->orders : [];
        $totalPrice = $orders->sum('price');

        return view('cart', compact('orders', 'totalPrice'));
    }

    // Удаление выбранных или всех заказов
    public function clear(Request $request)
    {
        $user = Auth::user();

        if ($request->has('selected')) {
            // Удаляем выбранные заказы
            Order::whereIn('id', $request->input('selected'))->delete();
        } else {
            // Удаляем все заказы пользователя
            $user->orders()->delete();
        }

        return redirect()->back()->with('success', 'Корзина очищена.');
    }

    // Оформление выбранных или всех заказов
    public function checkout(Request $request)
    {
        $user = Auth::user();

        if ($request->has('selected')) {
            // Перемещаем выбранные заказы
            $orders = Order::whereIn('id', $request->input('selected'))->get();
        } else {
            // Перемещаем все заказы пользователя
            $orders = $user->orders;
        }

        foreach ($orders as $order) {
            CompletedOrder::create($order->toArray());
            $order->delete();
        }

        return redirect()->back()->with('success', 'Заказ оформлен.');
    }
     public function confirmOrder(Request $request)
{
    $validated = $request->validate([
        'delivery_type' => 'required|in:pickup,delivery',
        'delivery_address' => 'required_if:delivery_type,delivery',
        'delivery_date' => 'required|date',
        'payment_method' => 'required|in:cash_on_delivery,online_payment',
    ]);

    $user = auth()->user();

    // Получаем все товары из корзины
    $cartItems = Order::where('user_id', $user->id)->get();

    if ($cartItems->isEmpty()) {
        return redirect()->back()->with('error', 'Корзина пуста.');
    }

    // Создаем запись в order_details
    $orderDetail = OrderDetail::create([
        'user_id' => $user->id,
        'delivery_type' => $request->input('delivery_type'),
        'delivery_address' => $request->input('delivery_address'),
        'delivery_date' => $request->input('delivery_date'),
        'payment_method' => $request->input('payment_method'),
    ]);

    // Перемещаем товары в completed_orders и привязываем к order_details
    foreach ($cartItems as $item) {
        $data = $item->toArray();
        $data['order_detail_id'] = $orderDetail->id;

        CompletedOrder::create($data);
        $item->delete();
    }

    return redirect()->route('success');
}
}
