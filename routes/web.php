<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/create',[UserController::class,'create'])->name('userCreate');
Route::post('/store',[UserController::class,'store'])->name('userStore');
Route::get('/{id}/delete',[UserController::class,'destroy'])->name('userDestroy');
Route::get('/{id}/update',[UserController::class,'update'])->name('userUpdate');
Route::post('/{id}/edit',[UserController::class,'edit'])->name('userEdit');