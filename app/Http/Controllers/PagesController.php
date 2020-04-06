<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function laravel()
    {
        return view('pages.laravel-' . app()->getLocale());
    }

    public function wordpress()
    {
        return view('pages.wordpress-' . app()->getLocale());
    }
}