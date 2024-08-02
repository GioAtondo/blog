<?php

use App\Http\Controllers\PostController;

Route::get('/new-post', function () {
    return view('new-post'); // Serve the Vue component
});

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


