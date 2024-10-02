<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
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
        // Optionally pass dynamic data to the view
        $projects = [
            'Portfolio Website',
            'Laravel Blog',
            'E-commerce Store'
        ];

        return view('projects', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }
}
