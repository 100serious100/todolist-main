<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;
 
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/lists',[ToDoListController::class, 'index'])->name('lists.index');
Route::get('/lists/create',[ToDoListController::class, 'create'])->name('lists.create');
Route::post('/lists',[ToDoListController::class, 'store'])->name('lists.store');
Route::get('/lists/{list}',[ToDoListController::class, 'show'])->name('lists.show');
Route::delete('/lists/{list}',[ToDoListController::class, 'destroy'])->name('lists.delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
