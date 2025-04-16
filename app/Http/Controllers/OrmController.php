<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas () {

//        $teacher = Teacher::find(1);
//        return $teacher->area;
//
//         $area = Area::find(1);
//         return $area->courses;
//
//        $course = Course::find(1);
//        return $course->apprentices;
//
//         $trainingCenter = TrainingCenter::find(1);
//         return $trainingCenter->teachers;
//
//        $computer = Computer::find(1);
//        return $computer->apprentice;
//
//        $apprentice = Apprentice::find(1);
//        return $apprentice->course;

        //relacion anidada
        return Teacher::with('Area.Courses.Apprentices.Computer')->get();
    }

}
