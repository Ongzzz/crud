<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/edit', function () {
//     return view('edit');
// });

// Route::get('/create', function () {
//     return view('create');
// });

// Route::get('/show', function () {
//     return view('show');
// });

Route::get('/', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create'])->name('create');
Route::post('/saveNewTask', [TaskController::class, 'saveNewTask'])->name('saveNewTask');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('show');
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('edit');
Route::post('/updateTask/{id}', [TaskController::class, 'updateTask'])->name('updateTask');
Route::get('/deleteTask/{id}', [TaskController::class, 'deleteTask'])->name('deleteTask');

