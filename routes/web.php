<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{user_id}/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/{user_id}/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/{user_id}/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/{user_id}/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/{user_id}/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/{user_id}/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
