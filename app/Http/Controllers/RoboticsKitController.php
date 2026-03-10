<?php

namespace App\Http\Controllers;

use App\Models\RoboticsKit;

class RoboticsKitController extends Controller
{
    public function index()
    {
        return RoboticsKit::query()->orderBy('name')->get();
    }
}
