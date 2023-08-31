<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-bulk-email', [EmailController::class, 'sendBulkEmail'])->name('send.bulk.email');
Route::get('/input-image', [ProductController::class, 'create'])->name('create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
