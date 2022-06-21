<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UMSController;

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
Route::get('/',[PagesController::class,'home'])->name('root');
Route::get('/welcome',[PagesController::class,'welcome'])->name('welcome');
Route::get('/student/list',[StudentController::class,'list'])->name('student.list');
Route::get('/student/details/{id}/{name}',[StudentController::class,'home'])->name('student.details');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/create',[StudentController::class,'createSubmit'])->name('student.create.submit');

Route::get('/ums/student/register',[UMSController::class,'register']);
Route::post('/ums/student/register',[UMSController::class,'registerSubmit']);
Route::get('/ums/student/login',[UMSController::class,'login'])->name('login');
Route::post('/ums/student/login',[UMSController::class,'loginSubmit']);
Route::get('/ums/student/home',[UMSController::class,'home'])->name('student.ums.home')->middleware('auth.user');
Route::get('/logout',[UMSController::class,'logout']);
Route::get('/ums/student/list',[UMSController::class,'list'])->name('login');