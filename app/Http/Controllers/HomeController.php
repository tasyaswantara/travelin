<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Testimonial;
use App\Models\Slider;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $destinations = Destination::latest()->get();
        $sliders = Slider::latest()->get();
        $testimonials = Testimonial::latest()->get();
        
        return view('frontend.home', compact('destinations', 'sliders','testimonials'));
    }
}
