<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::published()->paginate(6);

        return view('projects.index', compact('projects'));
    }
}
