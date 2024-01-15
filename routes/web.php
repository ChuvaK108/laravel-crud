<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;

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
Route::resource('users', UsersController::class);
Route::get('/', function () 
        {
            return view('welcome');
        });
Route::get('/users/{user}/products', [ProductsController::class, 'index'])->name('user.products.index');
