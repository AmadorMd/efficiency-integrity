<?php

use App\Http\Controllers\siteController;
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

Route::get('/', [siteController::class, 'index'])->name('home');
Route::get('/acerca-nosotros', [siteController::class, 'about'])->name('about');
Route::get('/blogs', [siteController::class, 'blogs'])->name('blogs');
Route::get('/nuestros-servicios', [siteController::class, 'services'])->name('sevices');
Route::get('/nuestros-servicios/1', [siteController::class, 'servicesDetail'])->name('sevices.detail');
