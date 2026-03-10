<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return Course::query()->orderBy('key')->get();
    }
}
