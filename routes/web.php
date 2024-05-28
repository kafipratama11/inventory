<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorController;

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

// ======================= ADMIN ===========================
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    });
    Route::get('/admin/products', [AdminController::class, 'show_products']);
    Route::get('/admin/purchase', [AdminController::class, 'show_transaction']);
    
    Route::get('/admin/pemakaian', function () {
        return view('admin.usage');
    });
    Route::post('/products', [ProductController::class, 'create_product'])->name('products.store');
    Route::post('/purchase-admin', [PurchaseController::class, 'create_transaction'])->name('purchase.store.admin');
    Route::post('/detail-purchase-admin', [PurchaseController::class, 'create_detail_transaction'])->name('detail.purchase.store.admin');
    
    Route::post('/update-purchase', [PurchaseController::class, 'update_detail_transaction'])->name('detail.purchase.update');
    
    Route::post('/update-product', [ProductController::class, 'update_product'])->name('product.update');
    Route::delete('/delete-product', [ProductController::class, 'delete_product'])->name('product.delete');
});

// ===================== OPERATOR ===========================
Route::middleware(['auth', 'role:operator'])->group(function () {
    Route::get('/operator/dashboard', function () {
        return view('operator.index');
    });
    Route::get('/operator/purchase', [OperatorController::class, 'show_transaction']);
    Route::get('/operator/usage', function () {
        return view('operator.usage');
    });
    Route::post('/purchase-operator', [PurchaseController::class, 'create_transaction'])->name('purchase.store.operator');
    Route::post('/detail-purchase', [PurchaseController::class, 'create_detail_transaction'])->name('detail.purchase.store');
});

// ===================== OFFICER ============================
Route::middleware(['auth', 'role:officer'])->group(function () {
    Route::get('/officer/purchase', [OfficerController::class, 'show_purchase']);
    Route::post('/purchase-officer', [PurchaseController::class, 'create_transaction'])->name('purchase.store.officer');
    Route::post('/detail-purchase', [PurchaseController::class, 'create_detail_transaction'])->name('detail.purchase.store');
});

Route::middleware('guest')->group(function () {
    route::get('/', [LoginController::class, 'index'])->name('login');
    route::post('/login-process-admin', [LoginController::class, 'login_process_admin'])->name('login-process-admin');
    route::post('/login-process-operator', [LoginController::class, 'login_process_operator'])->name('login-process-operator');
    route::post('/login-process-officer', [LoginController::class, 'login_process_officer'])->name('login-process-officer');
});

// Route::post('/purchase', [PurchaseController::class, 'create_transaction'])
//     ->name('purchase.store')
//     ->middleware(['admin', 'operator', 'officer']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');