<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\siteController;
use App\Models\Blog;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;
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
Route::get('/blogs/{entry}/detalle', [siteController::class, 'entry'])->name('blogs.entry');
Route::get('/nuestros-servicios', [siteController::class, 'services'])->name('services');
Route::get('/nuestros-servicios/{slug}/detalle', [siteController::class, 'servicesDetail'])->name('services.detail');
Route::get('/programas', [siteController::class, 'programs'])->name('programs');
Route::get('/contacto', [siteController::class, 'contact'])->name('contact');

Route::view('/login', 'auth.login')->name('login');

// Route::view('/dashboard', 'admin.dashboard')->name('dashboard')->middleware('auth');

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::view('/blogs', 'admin.blogs.index', [
        'entries' => Blog::all()
    ])->name('admin.blogs');
    Route::view('/blogs/nueva-entrada', 'admin.blogs.create')->name('blogs.create');
    Route::get('/blogs/{entry}/editar-entrada', function(Blog $entry){
        return view('admin.blogs.edit', [
            'entry' => $entry
        ]);
    })->name('blogs.edit');
    Route::view('/programas', 'admin.programs.index')->name('admin.programs');
    Route::view('/programas/nuevo-programa', 'admin.programs.create')->name('programs.create');
    Route::get('/programas/{program}/editar-programa', function(Program $program){
        return view('admin.programs.edit', [
            'program' => $program
        ]);
    })->name('programs.edit');
});