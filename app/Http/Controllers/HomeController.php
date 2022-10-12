<?php

namespace App\Http\Controllers;

use App\Post;
use App\Project;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.index')->with([
            'posts' => Post::published()->orderBy('publish_date', 'DESC')->limit(3)->get(),
            'projects' => Project::published()->orderBy('publish_date', 'ASC')->limit(3)->get(),
        ]);
    }
}
