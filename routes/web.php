<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[UserController::class,'index'])->name('login');
Route::post('/create',[UserController::class,'user_create'])->name('user.create');
Route::post('/',[UserController::class,'authenticate'])->name('user.login');


Route::middleware(['auth'])->group(function () {

    //for logout
    Route::get('/logout',[UserController::class,'logout'])->name('user.logout');


    //for dashboard
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

});
