<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Login;

Route::get('/', [C_Home::class, 'home_page']);
Route::post('/test-ajaxa', [C_Home::class, 'tes_ajax']);

/**
 * Login
 */
Route::get('/login-page', [C_Login::class, 'login_page']);