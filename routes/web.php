<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/profile' , [AdminController::class, 'profileblade'])->name('profileblade');
Route::get('/tables' , [AdminController::class, 'tablesblade'])->name('tablesblade');
Route::get('/notifications' , [AdminController::class, 'notificationsblade'])->name('notificationsblade');
Route::get('/reservations' , [AdminController::class, 'reservationsblade'])->name('reservationsblade');
Route::get('/addemployee' , [AdminController::class, 'addemployeeblade'])->name('addemployeeblade');

