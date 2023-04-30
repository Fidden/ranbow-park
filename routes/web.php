<?php

use App\Http\Controllers\OrderController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/',
    fn() => Inertia::render('index', [
        'tickets' => Ticket::all()
    ])
)->name('home');

Route::prefix('/order')->group(function () {
    Route::post('/', [OrderController::class, 'store']);
});
