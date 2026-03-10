<?php

namespace App\Http\Controllers;

use App\Models\CourseMaterial;

class CourseMaterialController extends Controller
{
    public function index()
    {
        return CourseMaterial::query()->latest()->get();
    }
}
