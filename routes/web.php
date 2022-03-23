<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;


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

Route::middleware('auth')->group(function () {

Route::get('/posts',[PostController::class,'index']);

Route::post('/posts',[PostController::class,'store']);

Route::get('/posts/create',[PostController::class,'create']);

Route::get('/posts/{post}',[PostController::class,'show'])->where('post','[0-9]+');

Route::get('/posts/{post}/edit',[PostController::class,'edit']);

Route::put('/posts/{post}',[PostController::class,'update']);

Route::delete('/posts/{post}',[PostController::class,'destroy']);

Route::get('/comments/{id}',[CommentController::class,'createComment']);

Route::post('/comments/{id}',[CommentController::class,'storeComment']);

Route::get('/comments/{id}/edit',[CommentController::class,'editComment']);

Route::put('/comments/{id}',[CommentController::class,'updateComment'])->name('updateComment');

Route::delete('/comments/{id}',[CommentController::class,'deleteComment'])->name('deleteComment');

Route::get('/categories',[CategoryController::class,'index']);

Route::get('/categories/{id}',[CategoryController::class,'showCategory']);

Route::get('/categories/create',[CategoryController::class,'createCategory']);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
