<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\TovarController;
use App\Http\Controllers\UserController;
use App\Models\CreateUser;
use App\Models\Tovar;
use Illuminate\Support\Facades\Route;

Route::get('/', function (CreateUser $createuser) {
    $tovars = Tovar::all();
    return view('welcome', compact('tovars'));
})->name('welcome');
//Товары crud
Route::get('/tovar-all', [TovarController::class, 'index'])->name('tovar-all');
Route::get('/tovar-show/{tovar}', [TovarController::class, 'show'])->name('tovar-show');
Route::get('/tovar-create', [TovarController::class, 'create'])->name('tovar-create');
Route::post('/tovar-store', [TovarController::class, 'store'])->name('tovarstore');
Route::get('/tovar-edit/{tovar}', [TovarController::class, 'edit'])->name('tovar-edit');
Route::put('/tovar-update/{tovar}', [TovarController::class, 'update'])->name('tovarupdate');
Route::delete('/tovar-delete/{tovar}', [TovarController::class, 'destroy'])->name('tovardelete');

//Заказ товара
Route::post('/order-store/{tovar}', [OrdersController::class, 'store'])->name('orderstore');
//Просмотр заказов
Route::get('/order-all', [OrdersController::class, 'index'])->name('order-all');
Route::put('/order-update/{orders}', [OrdersController::class, 'update'])->name('orderupdate');

//Категории



Route::get('/registration-create', [UserController::class, 'registration_create']);
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/registration', [UserController::class, 'registration'])->name('registration');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');