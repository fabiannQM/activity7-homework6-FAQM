<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;

class EnrollmentController extends Controller
{
    public function index()
    {
        return Enrollment::query()->latest()->get();
    }
}
