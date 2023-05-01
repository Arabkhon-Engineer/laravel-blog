<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// asosiy korinadigan pages start
Route::get('/', [PageController::class, 'main'])->name('/');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/single', [PageController::class, 'single'])->name('single');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/personal', [PageController::class, 'personal'])->name('personal');
// asosiy korinadigan pages end


//post pages start

Route::resource(
    'posts', PostController::class,);

//post pages end
