<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ReviewController;
use App\Http\Controllers\Front\DefaultController;

Route::controller(ReviewController::class)->group(function () {
    Route::get('/reviews', 'index')->name('reviews.index');
    Route::get('/reviews/create', 'create')->name('reviews.create');
    Route::post('/reviews', 'store')->name('reviews.store');
    Route::get('/reviews/{review}/edit', 'edit')->name('reviews.edit');
    Route::put('/reviews/{review}', 'update')->name('reviews.update');
    Route::get('/reviews/{review}/show', 'show')->name('reviews.show');
    Route::delete('/reviews/{review}', 'destroy')->name('reviews.destroy');
});

Route::get('/', [DefaultController::class, 'index'])->name('/');
