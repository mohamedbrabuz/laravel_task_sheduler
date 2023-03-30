<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [PostController::class, 'index'])->name('posts');
Route::get('post/{post}', [PostController::class, 'softDelete'])->name('post.delete');
Route::get('posts/trashed', [PostController::class, 'withTrashed'])->name('posts.trashed');
Route::delete('post/trashed/{id}', [PostController::class, 'forceDelete'])->name('post.forceDelete');
