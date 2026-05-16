<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\McqController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuizController;
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

Route::get('/quizzes', [QuizController::class, 'showQuiz'])->middleware('admin.auth');
Route::post('/quizzes/add', [QuizController::class, 'addQuiz'])->middleware('admin.auth');

Route::get('/quizzes/edit/{id}', [QuizController::class, 'showEdit'])->middleware('admin.auth');
Route::post('/quizzes/update/{id}', [QuizController::class, 'updateQuiz'])->middleware('admin.auth');

Route::get('/quizzes/delete/{id}', [QuizController::class, 'deleteQuiz'])->middleware('admin.auth');


// MCQs

Route::get('/mcqs/{id?}', [McqController::class, 'showMCQ'])->middleware('admin.auth');
Route::post('/mcqs/add/{id}', [McqController::class, 'addMCQ'])->middleware('admin.auth');

Route::get('/mcqs/edit/{id}', [McqController::class, 'showEdit'])->middleware('admin.auth');
Route::post('/mcqs/update/{id}', [McqController::class, 'updateMCQ'])->middleware('admin.auth');

Route::get('/mcqs/delete/{id}', [McqController::class, 'deleteMCQ'])->middleware('admin.auth');


// Student Quiz

Route::get('/student/quizzes');