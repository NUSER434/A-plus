<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AllServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Главная страница
Route::get('/', function () {
    return redirect()->route('first-step');
});

Route::get('/the-first-step', function () {
    return view('first-step');
})->name('first-step');

// Авторизация и регистрация
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Группа маршрутов с middleware для админов
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users');
    Route::put('/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.delete');

    Route::get('/services', [AdminServiceController::class, 'index'])->name('admin.services');
    Route::post('/services', [AdminServiceController::class, 'store'])->name('admin.services.store');
    Route::put('/services/{service}', [AdminServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/services/{service}', [AdminServiceController::class, 'destroy'])->name('admin.services.delete');

    Route::get('/orders', [AdminOrderController::class, 'index'])->name('admin.orders');
    Route::put('/orders/{order}', [AdminOrderController::class, 'update'])->name('admin.orders.update');
    Route::delete('/orders/{order}', [AdminOrderController::class, 'destroy'])->name('admin.orders.delete');
});

// Главная страница (доступна всем)
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/choose-form', [RequestController::class, 'showForm'])->name('choose.form');
Route::post('/submit-form', [RequestController::class, 'submitForm'])->name('submit.form');
Route::post('/submit-review', [HomeController::class, 'submitReview'])->name('submit.review');
Route::get('/api/search', [SearchController::class, 'index']);


// Услуги (доступны всем)
Route::get('/all-services', [AllServicesController::class, 'index'])->name('all-services.index');
Route::get('/all-services/{slug}', [AllServicesController::class, 'show'])->name('all-services.show');
Route::post('/save-order', [OrderController::class, 'store'])->name('save.order');


// О нас (доступно всем)
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Главная страница портфолио
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

// Страница категории (например, "/portfolio/tag")
Route::get('/portfolio/{category}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Контакты (доступно всем)
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update-profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update.password');
    Route::post('/profile/update-email', [ProfileController::class, 'updateEmail'])->name('profile.update.email');
    Route::post('/profile/delete-account', [ProfileController::class, 'deleteAccount'])->name('profile.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::post('/cart/checkout', [CartController::class, 'showCheckoutForm'])->name('cart.checkout.form');
    Route::post('/cart/confirm', [CartController::class, 'confirmOrder'])->name('cart.confirm.order');
    Route::get('/order/success', function () {
return view('success'); // или любой другой ответ
})->name('success');
});

require __DIR__.'/auth.php';
