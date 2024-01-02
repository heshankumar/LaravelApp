<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
<<<<<<< HEAD
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\StripeController;
=======
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1

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
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/product/{product}/view', [ProductController::class, 'view'])->name('product.view');
    Route::get('/inventory', [ProductController::class, 'inventory'])->name('inventory.index');


    Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/create', [ProductController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard', [ProductController::class, 'store'])->name('dashboard.store');
    Route::get('/dashboard/{product}/edit', [ProductController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/{product}/update', [ProductController::class, 'update'])->name('dashboard.update');
    Route::delete('/dashboard/{product}/destroy', [ProductController::class, 'destroy'])->name('dashboard.destroy');
    Route::get('/dashboard/{product}/view', [ProductController::class, 'view'])->name('dashboard.view');










    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
    Route::get('/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
    Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier.store');
    Route::get('/supplier/{supplier}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::put('/supplier/{supplier}/update', [SupplierController::class, 'update'])->name('supplier.update');
    Route::delete('/supplier/{supplier}/destroy', [SupplierController::class, 'destroy'])->name('supplier.destroy');


    Route::get('/warehouse', [WarehouseController::class, 'index'])->name('warehouse.index');
    Route::get('/warehouse/create', [WarehouseController::class, 'create'])->name('warehouse.create');
    Route::post('/warehouse', [WarehouseController::class, 'store'])->name('warehouse.store');
    Route::get('/warehouse/{warehouse}/edit', [WarehouseController::class, 'edit'])->name('warehouse.edit');
    Route::put('/warehouse/{warehouse}/update', [WarehouseController::class, 'update'])->name('warehouse.update');
    Route::delete('/warehouse/{warehouse}/destroy', [WarehouseController::class, 'destroy'])->name('warehouse.destroy');


    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/customer/{customer}/update', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/customer/{customer}/destroy', [CustomerController::class, 'destroy'])->name('customer.destroy');


    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');


    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/details', [OrderController::class, 'details'])->name('order.order');
<<<<<<< HEAD
    
    
    Route::post('/order/details/save', [OrderItemController::class, 'store'])->name('order.store');
    
=======
    Route::post('/order/details', [OrderController::class, 'store'])->name('order.store');
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

<<<<<<< HEAD

    Route::get('cart', [CartsController::class, 'cart'])->name('cart');
    Route::get('/add-to-cart/{id}', [CartsController::class, 'addToCart'])->name('add_to_cart');
    Route::patch('/update-cart', [CartsController::class, 'update'])->name('update_cart');
    Route::delete('/remove-from-cart', [CartsController::class, 'remove'])->name('remove_from_cart');


    Route::post('/session', [StripeController::class, 'session'])->name('session');
    Route::get('/success', [StripeController::class, 'success'])->name('success');
    Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

=======
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
    
});

require __DIR__.'/auth.php';
