<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(9); // Show 9 projects per page
        return view('list', compact('projects'));
    }
}
