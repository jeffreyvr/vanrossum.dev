<?php

namespace App\Http\Controllers;

use App\Post;
use App\Project;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages.home.index')->with([
            'posts' => Post::published()->orderBy('publish_date', 'DESC')->limit(3)->get(),
            'projects' => Project::published()->orderBy('publish_date', 'ASC')->limit(3)->get(),
        ]);
    }
}
