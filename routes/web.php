<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    $posts = Post::all();
    return view('welcome',compact('posts'));
});

Route::resource('posts', PostController::class);
