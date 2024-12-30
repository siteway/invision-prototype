<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index']);

Route::get('/projects/{slug}', function ($slug) {
    $project = Project::where('slug', $slug)->first();
    return view('view', compact('project'));
});
