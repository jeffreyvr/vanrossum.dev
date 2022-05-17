<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{
    protected function get_projects()
    {
        return [
            [
                'url' => 'https://addrow.io',
                'domain' => 'addrow.io',
                'description' => __('A user friendly invoicing app'),
                'logo' => file_get_contents(public_path('images/logos/addrow.svg')),
                'open_source' => false
            ],
            [
                'url' => 'https://tailpress.io',
                'domain' => 'tailpress.io',
                'description' => __('WordPress theme boilerplate with Tailwind CSS and Laravel Mix'),
                'logo' => file_get_contents(public_path('images/logos/tailpress.svg')),
                'open_source' => true
            ],
            [
                'url' => 'https://wordpress.org/plugins/easy-liveblogs/',
                'domain' => 'wordpress.org',
                'description' => __('Easy liveblogs for WordPress'),
                'logo' => file_get_contents(public_path('images/logos/easy-liveblogs.svg')),
                'open_source' => true
            ],
            [
                'url' => 'https://github.com/jeffreyvr/rdw-opendata-php',
                'domain' => 'github.com',
                'name' => __('PHP Client for RDW API'),
                'description' => __('Library for getting vehicle data by license plate.'),
                'open_source' => true
            ],
            [
                'url' => 'https://codesnappy.io',
                'domain' => 'codesnappy.io',
                'name' => 'CodeSnappy.io',
                'description' => __('Quickly create an image of your code snippet.'),
                'open_source' => true
            ],
            [
                'url' => 'https://github.com/jeffreyvr/laravel-simple-media',
                'domain' => 'github.com',
                'name' => 'Laravel Simple Media',
                'description' => __('Laravel package to handle media attached or unattached to Eloquent models.'),
                'open_source' => true
            ]
        ];
    }

    public function __invoke()
    {
        return view('welcome')->with([
            'posts' => Post::published()->limit(3)->get(),
            'projects' => array_filter($this->get_projects(), function($project) { return !empty( $project['logo'] ); }),
            'other_projects' => array_filter($this->get_projects(), function($project) { return empty( $project['logo'] ); }),
        ]);
    }
}
