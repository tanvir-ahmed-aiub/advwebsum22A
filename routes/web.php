<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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
