<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CourseController;

Route::get('/',[MentorController::class,'home'])->name('home');
Route::get('/about',[MentorController::class,'about'])->name('about');
Route::get('/trainer',[MentorController::class,'trainer'])->name('trainer');
Route::get('/pricing',[MentorController::class,'pricing'])->name('pricing');
Route::get('/event',[MentorController::class,'event'])->name('event');
Route::get('/courses',[MentorController::class,'courses'])->name('courses');
Route::get('/contact',[MentorController::class,'contact'])->name('contact');
Route::get('/details/{id}',[MentorController::class,'courseDetails'])->name('details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[WebController::class,'dashboard'])->name('dsh');

    Route::resource('course',CourseController::class);
});
