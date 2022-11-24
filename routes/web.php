<?php
use App\Http\Controllers\HomeController;
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

route::get('/',[HomeController::class,'index'])->name("dashboard")->middleware('auth');
route::get('/login',[HomeController::class,'handleLogin'])->name("login");
route::post('/login',[UserController::class,'LoginUser'])->name("loginuser");

Route::get('/register',[HomeController::class,'handleSignup'])->name('register');
Route::post('/register',[UserController::class,'handleRegister'])->name('register');
Route::get('/logout',[UserController::class,'logout'])->name('logout');



