<?php

use App\Http\Controllers\TaskController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TaskController::class, 'homepage'])->name('homepage');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index')->middleware('auth');
Route::get('/tasks/crea', [TaskController::class, 'create'])->name('tasks.create')->middleware('auth');
Route::get('/tasks/{task}/modifica', [TaskController::class, 'edit'])->name('tasks.edit')->middleware('auth');

