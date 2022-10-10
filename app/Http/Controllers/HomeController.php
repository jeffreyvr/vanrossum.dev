<?php

namespace App\Http\Controllers;

use App\Post;
use App\Project;

class HomeController extends Controller
{
    public function index()
    {
        return view("pages.home.index")->with([
            'posts' => Post::published()->limit(3)->get(),
            'projects' => Project::published()->limit(3)->get()
        ]);
    }
}
