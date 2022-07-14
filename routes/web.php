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
Route::get('/form', [FormController::class, 'form'])->name('form');
