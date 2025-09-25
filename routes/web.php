<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;


Route::get('/',[UserController::class,'index'])->name('index');
