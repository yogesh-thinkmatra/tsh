<?php

use App\Http\Controllers\admin\BlogController;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resources([
        'blog' => BlogController::class
    ]);
    // Route::get('blog/index', 'StoryController@index')->name('blog');
});