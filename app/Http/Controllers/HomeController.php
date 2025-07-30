<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with alumni tracer information
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $stats = [
            'total_alumni' => 25,
            'data_kuesioner' => 120,
            'cv_builder' => 120,
            'job_portal' => 120,
            'career_center' => 120
        ];

        return view('home', compact('stats'));
    }
}
