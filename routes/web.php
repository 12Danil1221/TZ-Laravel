<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FidbackController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\TovarController;
use App\Http\Controllers\UserController;
use App\Models\CreateUser;
use App\Models\Tovar;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('welcome');
//Товары crud
Route::get('/tovar-all', [TovarController::class, 'index'])->name('tovar-all');
Route::get('/tovar-show/{tovar}', [TovarController::class, 'show'])->name('tovar-show');
Route::get('/tovar-create', [TovarController::class, 'create'])->name('tovar-create');
Route::post('/tovar-store', [TovarController::class, 'store'])->name('tovarstore');
Route::get('/tovar-edit/{tovar}', [TovarController::class, 'edit'])->name('tovar-edit');
Route::put('/tovar-update/{tovar}', [TovarController::class, 'update'])->name('tovarupdate');
Route::delete('/tovar-delete/{tovar}', [TovarController::class, 'destroy'])->name('tovardelete');
//Блог новостей
Route::get('/blog-all', [BlogController::class, 'index'])->name('blog-all');
Route::get('/blog-create', [BlogController::class, 'create'])->name('blog-create');

//Заказ товара
Route::post('/order-store/{tovar}', [OrdersController::class, 'store'])->name('orderstore');
//Оплата товара
Route::post('/stripe-store', [PaypalController::class, 'store'])->name('stripe.store');

//Просмотр заказов
Route::get('/order-all', [OrdersController::class, 'index'])->name('order-all');
Route::put('/order-update/{orders}', [OrdersController::class, 'update'])->name('orderupdate');

//Категории

//Обратная связь сделана с отдачей в Rabbit
Route::post('/fidback-store', [FidbackController::class, 'store'])->name('fidbackstore');

//Админ панель
Route::get('/admin-panel', [AdminController::class, 'index'])->name('adminpanel');
Route::get('/admin-blog', [AdminController::class, 'blog'])->name('adminblog');

//Админ Панель Управление заказами
Route::get('/order-edit/{order}', [AdminController::class, 'order_edit'])->name('order_edit');
Route::put('/order-update/{order}', [AdminController::class, 'order_update'])->name('order_update');
Route::delete('/order-delete/{order}', [AdminController::class, 'order_destroy'])->name('order_destroy');


//Админ Панель Управление пользователей
Route::get('/user-edit/{user}', [AdminController::class, 'user_edit'])->name('user_edit');
Route::put('/user-update/{user}', [AdminController::class, 'user_update'])->name('user_update');
Route::delete('/user-delete/{user}', [AdminController::class, 'user_destroy'])->name('user_destroy');


Route::get('/registration-create', [UserController::class, 'registration_create']);
Route::get('/login', [UserController::class, 'login_view'])->name('login');
Route::get('/authorization', [UserController::class, 'authorization'])->name('authorization');

Route::post('/registration', [UserController::class, 'registration'])->name('registration');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');