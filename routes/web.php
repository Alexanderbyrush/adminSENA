<?php

use App\Http\Controllers\OrmController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseTeacherController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ApprenticeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('orm', [OrmController::class, 'consultas']);
Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('areas', [AreaController::class, 'index'])->name('areas.index');
Route::get('trainingCenters', [TrainingCenterController::class, 'index'])->name('trainingCenter.index');
Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('courseTeacher', [CourseTeacherController::class, 'index'])->name('courseTeacher.index');
Route::get('computer', [ComputerController::class, 'index'])->name('computer.index');
Route::get('apprentice', [ApprenticeController::class, 'index'])->name('apprentice.index');





