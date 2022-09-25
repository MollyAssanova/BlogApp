<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;


Route::get('/', function(){
     return redirect()->route('posts.index');
});

Route::resource('posts', postcontroller::class);
//Route::get('/posts',[postcontroller::class, 'index'] )->name('posts.index');
//Route::get('/posts/create',[postcontroller::class, 'create'] )->name('posts.create');
//Route::post('/posts',[postcontroller::class, 'store'] )->name('posts.store');
//Route::get('/posts/{id}',[postcontroller::class, 'show'] )->name('posts.show');
