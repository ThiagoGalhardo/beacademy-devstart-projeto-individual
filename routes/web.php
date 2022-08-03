<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PageController,
    UserController,
    FormController,
    FileController,
    OrderController,
};

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
Route::get('/products', [PageController::class, 'products'])->name('page.products');



Route::middleware(['auth'])->group(function () {
    Route::get('/form', [FormController::class, 'form'])->name('form');
    Route::post('/form', [FormController::class, 'store'])->name('form.store');
    Route::get('/choose', [PageController::class, 'choose'])->name('page.choose');
    Route::get('/file', [FileController::class, 'create']);
    Route::post('/file', [FileController::class, 'store']);

    Route::post('/orders', [OrderController::class, 'storeOrder'])->name('users.saveOrder');
    Route::get('admin/orders', [OrderController::class, 'showAllOrders'])->name('orders.listAll');
    Route::get('admin/orders/{id}', [OrderController::class, 'showOrdersUserAdmin'])->name('orders.listOrderUserforAdmin');

    Route::get('/account/{id}', [UserController::class, 'account'])->name('users.account');
    Route::get('/account/{id}/orders', [OrderController::class, 'showOrders'])->name('users.orders');
    Route::get('/account/{id}/checkout', [OrderController::class, 'checkout'])->name('users.checkout');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index'])->name('users.list');
    Route::get('/admin/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/admin/panel', [UserController::class, 'panel'])->name('admin.panel');
});
