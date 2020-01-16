<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome')->with([
            'posts' => Post::published()->limit(5)->get(),
            'projects' => [
                [
                    'url' => 'https://addrow.io',
                    'domain' => 'addrow.io',
                    'description' => __('A user friendly invoicing app'),
                    'logo' => file_get_contents(url('images/logos/addrow.svg'))
                ],
                [
                    'url' => 'https://wordpress.org/plugins/easy-liveblogs/',
                    'domain' => 'wordpress.org',
                    'description' => __('Easy liveblogs for WordPress'),
                    'logo' => '<i class="fas text-5xl fa-sync-alt"></i>'
                ],
                [
                    'url' => 'https://github.com/jeffreyvr/rdw-opendata-php',
                    'domain' => 'github.com',
                    'description' => __('Library for getting vehicle data by license plate'),
                    'logo' => '<i class="fas text-5xl fa-car"></i>'
                ]
            ]
        ]);
    }
}
