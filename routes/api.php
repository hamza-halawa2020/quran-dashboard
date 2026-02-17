<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WorkSampleController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\MainSliderController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\MediaCenterController;


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);

Route::get('/media-center', [MediaCenterController::class, 'index']);

Route::get('/main-sliders', [MainSliderController::class, 'index']);

Route::get('/reviews', [ReviewController::class, 'index']);

Route::post('/contacts', [ContactController::class, 'store']);