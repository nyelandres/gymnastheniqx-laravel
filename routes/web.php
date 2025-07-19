<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\InvoiceOutvoiceRecordsController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index'); // ✅ FIXED HERE
    })->name('dashboard');
    Route::get('/user-management', [UserManagementController::class, 'index'])->name('user.management');
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/suppliers', [SuppliersController::class, 'index'])->name('suppliers');
    Route::get('/iorecords', [InvoiceOutvoiceRecordsController::class, 'index'])->name('invoice.outvoice.records');
    Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
});     

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
