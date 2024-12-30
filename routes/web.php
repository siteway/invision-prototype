<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::get('/', function () {
    $projects = Project::all()->take(10); // Fetch all projects from the database
    return view('list', compact('projects'));
});

Route::get('/projects/{slug}', function ($slug) {
    $project = Project::where('slug', $slug)->first();
    return view('view', compact('project'));
});
