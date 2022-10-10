<?php

namespace App;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory, Sushi;

    public function getRows()
    {
        return [
            [
                'lang' => 'nl',
                'title' => 'Laravel',
                'description' => "Door de jaren heen heb ik met verschillende PHP frameworks gewerkt. Laravel vind ik met afstand het prettigst om mee te werken.
                Het is een solide fundament voor simpele of juist complexe web-applicaties. Daarnaast is het wereldwijd een populair framework, met een grote en actieve developer-community.",
                'url' => localized_route('laravel'),
                'snippet' => Storage::get('code-snippets/laravel.md'),
                'snippet_name' => 'Laravel Simple Media',
                'snippet_url' => 'https://github.com/jeffreyvr/laravel-simple-media'
            ],
            [
                'lang' => 'en',
                'title' => 'Laravel',
                'description' => "Through the years, I have worked with several PHP frameworks. I find that Laravel is by far
                the best to work with. It allows me to create great web apps and API's. I love the surrounding community and how
                it's widely used around the world.",
                'url' => localized_route('laravel'),
                'snippet' => Storage::get('code-snippets/laravel.md'),
                'snippet_name' => 'Laravel Simple Media',
                'snippet_url' => 'https://github.com/jeffreyvr/laravel-simple-media'
            ],
            [
                'lang' => 'en',
                'title' => 'WordPress',
                'description' => "<p>WordPress has been around for a long time and is the most used CMS in the world. It's a
                    great tool to build a solid website.</p>
                <p>WordPress has a huge community providing with tons of plugins and themes, but sometimes you need
                    customization. That's where I come in.</p>",
                'url' => localized_route('wordpress'),
                'snippet' => Storage::get('code-snippets/wordpress.md'),
                'snippet_name' => 'TailPress',
                'snippet_url' => 'https://tailpress.io'
            ],
            [
                'lang' => 'nl',
                'title' => 'WordPress',
                'description' => "WordPress is wereldwijd het meest gebruikte CMS. Het is een solide tool om een website mee te bouwen. WordPress
                heeft een grote community die vele plugins en thema's ter beschikking stelt. Maar soms, heb je maatwerk nodig. Dat is waar ik kan helpen.",
                'url' => localized_route('wordpress'),
                'snippet' => Storage::get('code-snippets/wordpress.md'),
                'snippet_name' => 'TailPress',
                'snippet_url' => 'https://tailpress.io'
            ]
        ];
    }
}
