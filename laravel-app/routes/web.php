<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TourdetailsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home/tours', [
    ToursController::class,
    'index'
])->name('tours');

Route::get('/home/tourdetails/{id}', [
    TourdetailsController::class,
    'index'
])->name('tourdetails.id');

Route::get('/home/carts/{id}', [
    CartsController::class,
    'index'
])->name('carts.id');

Route::get('/home/carts', [
    CartsController::class,
    'emptyCart'
])->name('carts');

Route::get('/home/users-management', [
    UsersController::class,
    'index'
])->name('users-management');

Auth::routes();
Route::get('/home', [
    HomeController::class, 
    'index'
])->name('home');

