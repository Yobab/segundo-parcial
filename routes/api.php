<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/student', [StudentController::class, 'getAll'])->name('getAllStudents');
Route::delete('/student/{id}', [StudentController::class, 'delete'])->name('deleteStudent');
Route::patch('/student/{id}', [StudentController::class, 'edit'])->name('getAllStudents');
Route::post('/student', [StudentController::class, 'create'])->name('createStudent');