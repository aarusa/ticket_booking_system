<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlightSchedule;
use App\Models\Airline;

class HomeController extends Controller
{
    public function index()
    {
        $airlines = Airline::all();
        
        return view('frontend.pages.index', compact('airlines'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

}
