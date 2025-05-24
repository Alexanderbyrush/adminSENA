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


Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentices.index');
Route::get('apprentices/create', [ApprenticeController::class, 'create'])->name('apprentices.create');
Route::post('apprentices/store', [ApprenticeController::class, 'store'])->name('apprentices.store');
Route::get('apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentices.show');
Route::put('apprentices/{apprentice}', [ApprenticeController::class, 'update'])->name('apprentices.update');
Route::get('apprentices/{apprentice}/edit', [ApprenticeController::class, 'edit'])->name('apprentices.edit');
Route::delete('apprentices/{apprentice}', [ApprenticeController::class, 'destroy'])->name('apprentices.destroy');





