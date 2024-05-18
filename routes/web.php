<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/classes', function () {
    return view('classes');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/loginn', function () {
    return view('loginn');
});
Route::get('/Schedule', function () {
    return view('Schedule');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/csignup', function () {
    return view('csignup');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/signupp', function () {
    return view('signupp');
});


Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');



Route::get('/store', [ItemController::class, 'index'])->name('shop.index');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::post('/items/store', [ItemController::class, 'store'])->name('items.store');
    Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
