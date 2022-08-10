<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Contact;

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
Route::get('/mail-send', [TestController::class,'mailSend'])->name('mail');
Route::get('/contact', [TestController::class,'index']);
Route::get('/contact', [TestController::class,'store'])->name('store');

