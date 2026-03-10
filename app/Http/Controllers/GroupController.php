<?php

namespace App\Http\Controllers;

use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        return Group::query()->orderBy('name')->get();
    }
}
