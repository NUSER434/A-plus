<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('order_id')->nullable(); // если связь с основным заказом
        $table->string('delivery_type'); // 'pickup' или 'delivery'
        $table->text('delivery_address')->nullable(); // если delivery
        $table->date('delivery_date')->nullable(); // дата доставки
        $table->string('payment_method'); // 'cash_on_delivery', 'card_on_delivery', 'online_payment'
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
