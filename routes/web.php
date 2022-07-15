<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';



Route::get('/', function () {
    return view('page.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/about', [PageController::class, 'about'])->name('page.about');
Route::get('/services', [PageController::class, 'services'])->name('page.services');
Route::get('/contact', [PageController::class, 'contact'])->name('page.contact');
Route::get('/form', [FormController::class, 'form'])->name('form');
