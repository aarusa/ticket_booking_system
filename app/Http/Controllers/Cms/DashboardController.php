<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\FlightSchedule;
use App\Models\Airline;

class DashboardController extends Controller
{
    public function index()
    {
        $bookingCount = Booking::all()->count();
        $scheduleCount = FlightSchedule::all()->count();
        $airlineCount = Airline::all()->count();
        $flights = FlightSchedule::all();
        return view('cms.dashboard', compact('bookingCount', 'scheduleCount', 'airlineCount', 'flights'));
    }
}
