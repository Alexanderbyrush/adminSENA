<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index() {
        $trainingCenters = TrainingCenter::all();
        return view('training_centers.index', compact('trainingCenters'));
    }
}
