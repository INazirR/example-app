<?php

Route::get('/', 'TestController@welcome');

// Route::get('/', [TestController::class, 'welcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
