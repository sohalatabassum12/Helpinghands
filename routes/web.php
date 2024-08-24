<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'home']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/worker', [App\Http\Controllers\WorkerController::class, 'index'])->name('worker');
Route::post('create/worker', [App\Http\Controllers\WorkerController::class, 'create'])->name('worker.create');
Route::post('store/worker', [App\Http\Controllers\WorkerController::class, 'store'])->name('worker.store');
