<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\FrontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/cart', [StripeController::class, 'cart'])->name('stripe.cart');
Route::get('/checkout', [StripeController::class, 'checkout'])->name('stripe.checkout');
Route::get('/thanks', [FrontendController::class, 'thanks'])->name('front.thanks');

//Stripe
Route::get('/config', [StripeController::class, 'config'])->name('stripe.config');
Route::get('/create-payment-intent', [StripeController::class, 'createPaymentIntent'])->name('stripe.createPaymentIntent');


