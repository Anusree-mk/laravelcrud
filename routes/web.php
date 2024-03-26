<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'index'])->name('posts.index');
Route::get('/create',[PostController::class,'create'])->name('posts.create');
Route::post('/store',[PostController::class,'store'])->name('posts.store');
Route::get('/edit/{post}',[PostController::class,'edit'])->name('posts.edit');
Route::put('/update/{post}',[PostController::class,'update'])->name('posts.update');
Route::get('/show/{post}',[PostController::class,'show'])->name('posts.show');
Route::delete('/delete/{id}',[PostController::class,'destroy'])->name('posts.destroy');