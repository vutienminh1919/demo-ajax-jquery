<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SocialController;
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

//Route::middleware('auth')->group(function (){
    Route::prefix('/todos')->group(function (){
        Route::get('/', [TodoController::class, 'index'])->name('todos.index');
        Route::post('/create', [TodoController::class, 'store']);
        Route::put('/{todo}', [TodoController::class, 'update']);
        Route::delete('/{todo}', [TodoController::class, 'destroy']);

});
Route::prefix('/admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showFormLogin'])->name('admin.showFormLogin');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::get('/register', [AuthController::class, 'showFormRegister'])->name('admin.showFormRegister');
    Route::post('/register', [AuthController::class, 'register'])->name('admin.register');
});
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect'])->name('login');
Route::get('/callback/{provider}', [SocialController::class, 'callback']);

Route::prefix('/books')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('todos.index');
    Route::post('/create', [BookController::class, 'store']);
    Route::put('/{todo}', [BookController::class, 'update']);
    Route::delete('/{todo}', [BookController::class, 'destroy']);
});

Route::resource('posts', PostController::class)->name('get','posts.index');



