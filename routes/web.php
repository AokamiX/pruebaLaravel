<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;

Route::post('/user', [ApiController::class, 'addUser']);
Route::get('/users', [ApiController::class, 'getUsers']);
Route::post('/product', [ApiController::class, 'addProduct']);
Route::get('/products', [ApiController::class, 'getProducts']);
Route::delete('/product/{id}', [ApiController::class, 'deleteProduct']);
Route::put('/product/{id}', [ApiController::class, 'updateProduct']);
Route::get('/user/{id}/products', [ApiController::class, 'getUserProducts']);
Route::get('/product/{id}/users', [ApiController::class, 'getProductUsers']);
Route::get('/order/{id}/products', [ApiController::class, 'getOrderProducts']);
