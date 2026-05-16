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

Route::get('/edit/{id}',[StudentController::class,'showEdit'])->middleware('check.session');
Route::post('/edit/{id}',[StudentController::class,'edit']);

Route::get('/logout',[StudentController::class,'logout']);

Route::get('/dashboard',[StudentController::class,'showDashboard'])->middleware('check.session');

Route::get('/profile/{id}',[StudentController::class,'profile'])->middleware('check.session');

Route::get('/change-password/{id}',[StudentController::class,'showChangePassword'])->middleware('check.session');
Route::post('/change-password/{id}',[StudentController::class,'changePassword'])->middleware('check.session');


// admin
Route::get('/admin-login',[StudentController::class,'showAdminLogin']);
Route::post('/admin-login',[StudentController::class, 'adminLogin']);

Route::get('/register',[StudentController::class,'showRegister']);
Route::post('/register',[StudentController::class,'register']);

Route::get('/edit/{id}',[StudentController::class,'showEdit'])->middleware('check.session');
Route::post('/edit/{id}',[StudentController::class,'edit']);

Route::get('/logout',[StudentController::class,'logout']);

Route::get('/dashboard',[StudentController::class,'showDashboard'])->middleware('check.session');

Route::get('/profile/{id}',[StudentController::class,'profile'])->middleware('check.session');

Route::get('/change-password/{id}',[StudentController::class,'showChangePassword'])->middleware('check.session');
Route::post('/change-password/{id}',[StudentController::class,'changePassword'])->middleware('check.session');