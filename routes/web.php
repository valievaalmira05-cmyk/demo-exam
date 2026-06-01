<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get("/register", [AuthController::class,"showRegister"]);
Route::post('/register', [AuthController::class,'register']);

Route::get('/login', function(){
    return 'Страница входа';
});

Route::get("/login", [AuthController::class,"showLogin"]);
Route::post('/login', [AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout']);