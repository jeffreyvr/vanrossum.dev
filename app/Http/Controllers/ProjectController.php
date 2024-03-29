<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View
    {
        $projects = Project::published()->paginate(6);

        return view('projects.index', compact('projects'));
    }
}
