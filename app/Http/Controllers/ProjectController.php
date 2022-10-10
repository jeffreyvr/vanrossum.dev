<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::published()->paginate(8);

        return view('projects.index', compact('projects'));
    }
}
