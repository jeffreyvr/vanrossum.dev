<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Project;

class ProjectController extends Controller
{
    public function index(): View
    {
        $projects = Project::published()->paginate(6);

        return view('projects.index', compact('projects'));
    }
}
