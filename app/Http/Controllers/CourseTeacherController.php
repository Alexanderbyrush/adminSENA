<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseTeacherController extends Controller
{
    public function index() {
        $courseTeachers = CourseTeacher::all();
        return view('course_teacher.index', compact('courseTeachers'));
    }
}
