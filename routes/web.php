<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
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

Route::get('/home',[GuestController::class , 'index'])->name('welcome');

Route::get('/login' , [LoginController::class , 'showLogin'])->name('login');
Route::post('/login' , [LoginController::class , 'login']);

Route::get('/register', [GuestController::class , 'showRegister'])->name('register');
Route::post('/register', [GuestController::class , 'register']);

Route::get('/user/{user}/dashboard' , [AuthController::class , 'showDashboard'])->name('dashboard');

Route::post('/logout' , [AuthController::class , 'logout'])->name('logout');

Route::get('/user/{user}/post' , [AuthController::class , 'showPost'])->name('post');
Route::post('/user/{user}/post' , [AuthController::class , 'post']);

Route::get('user/{user}/profile' , [AuthController::class , 'showProfile'])->name('profile');
