<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Testimonial;
use App\Models\Slider;

class DestinationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $destinations = Destination::latest()->get();
        
        
        return view('frontend.destination.index', compact('destinations'));
    }
}
