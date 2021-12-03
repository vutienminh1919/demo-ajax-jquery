<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('books')->group(function (){
    Route::get('/',[BookController::class,'index'])->name('books.index');
    Route::post('/store',[BookController::class,'store'])->name('books.store');
    Route::put('/edit',[BookController::class,'edit'])->name('books.edit');
    Route::delete('/destroy',[BookController::class,'destroy'])->name('books.destroy');

});
Route::get('/home', [TodoController::class, 'index']);
Route::post('/todos/create', [TodoController::class, 'store']);
Route::put('/todos/{todo}', [TodoController::class, 'update']);
Route::delete('/todos/{todo}', [TodoController::class, 'destroy']);


