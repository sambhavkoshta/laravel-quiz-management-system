<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
});

Route::get('/login',[StudentController::class,'showLogin']);
Route::post('/login',[StudentController::class, 'login']);

Route::get('/register',[StudentController::class,'showRegister']);
Route::post('/register',[StudentController::class,'register']);

Route::get('/logout',[StudentController::class,'logout']);

Route::get('/dashboard',[StudentController::class,'showDashboard']);