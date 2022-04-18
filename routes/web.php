<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student', [StudentController::class, 'post'])->name('student.post');
Route::delete('/student/{student:name}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::get('/student/{student:name}', [StudentController::class, 'show'])->name('student.show');
Route::get('/student/{student:name}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student:name}', [StudentController::class, 'update'])->name('student.update');
