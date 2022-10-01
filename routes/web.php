<?php


use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/',function (){
    return redirect()->route('posts.index');
});

Route::resource('posts',PostController::class);


Route::get('/posts/category/{category}',[PostController::class,'postsByCategory'])->name('posts.category');
Route::post('/posts/{post}',[CommentController::class,'store'])->name('comments.store');
Route::get('/comment/edit/{comment}',[CommentController::class,'edit'])->name('comments.edit');
Route::put('/comment/{comment}',[CommentController::class,'update'])->name('comments.update');
Route::delete('/comments/delete/{comment}',[CommentController::class,'destroy'])->name('comments.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
