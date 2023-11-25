<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        // Assuming you have an array of projects
        $projects = [
            // Your project data here
        ];

        return view('projects', ['projects' => $projects]);
    }

    public function contact()
    {
        return view('contact');
    }
}
