<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\MensajeController;
use App\Http\Controllers\Admin\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->group(function () {
    
    Route::get('/mensajes', [MensajeController::class, 'index'])->name('admin.mensajes');
    Route::get('/productos', [ProductoController::class, 'index'])->name('admin.productos.index');
    Route::get('/productos/crear', [ProductoController::class, 'create'])->name('admin.productos.create');
    Route::post('/productos', [ProductoController::class, 'store'])->name('admin.productos.store');
    
});