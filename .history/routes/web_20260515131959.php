<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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
Route::get('/admin-login',[AdminController::class,'showAdminLogin']);
Route::post('/admin-login',[AdminController::class, 'adminLogin']);

Route::get('/admin-register',[AdminController::class,'showAdminRegister']);
Route::post('/admin-register',[AdminController::class, 'adminRegister']);

Route::get('/edit/{id}',[AdminController::class,'showEdit'])->middleware('check.session');
Route::post('/edit/{id}',[AdminController::class,'edit']);

Route::get('/admin-logout',[AdminController::class,'adminLogout'])->middleware('admin.auth');
Route::get('/admin-dashboard',[AdminController::class,'showAdminDashboard'])->middleware('admin.auth');

// Category

Route::get('/categories',[CategoryController::class,'showCategory'])->middleware('admin.auth');
Route::post('/categories/add',[CategoryController::class,'addCategory'])->middleware('admin.auth');

Route::get('/categories/edit/{id}',[CategoryController::class,'showEdit'])->middleware('admin.auth'); 
Route::post('/categories/update/{id}',[CategoryController::class,'updateCategory'])->middleware('admin.auth'); 

Route::get('/categories/delete/{id}', [CategoryController::class, 'deleteCategory'])->middleware('admin.auth');

// Quiz

Route::get('/quizzes', [CategoryController::class, 'showQuiz'])->middleware('admin.auth');
Route::post('/quizzes/add', [CategoryController::class, 'addQuiz'])->middleware('admin.auth');

Route::get('/quizzes/edit/{id}', [CategoryController::class, 'showEdit'])->middleware('admin.auth');
Route::post('/quizzes/update/{id}', [CategoryController::class, 'updateQuiz'])->middleware('admin.auth');

Route::get('/quizzes/delete/{id}', [CategoryController::class, 'deleteQuiz'])->middleware('admin.auth');
