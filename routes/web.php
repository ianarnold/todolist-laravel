<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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


//RETORNAM VIEWS
Route::get('/', [TasksController::class, 'tasksView'])->name('tasksview');

//AÇÕES DO CRUD
Route::post('/store', [TasksController::class, 'store'])->name('storetask');
