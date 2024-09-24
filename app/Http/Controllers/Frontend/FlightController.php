<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlightSchedule;
use App\Models\User;
use App\Models\Booking;
use \Carbon\Carbon;

class FlightController extends Controller
{
    public function searchFlight(Request $request)
    {
        $flights = FlightSchedule::get()->where('origin_airport',$request['origin_airport'])->where('destination_airport',$request['destination_airport']);

        return view('frontend.pages.flights',compact('flights'));
    }

    public function flightDetails($id)
    {
        $flight = FlightSchedule::findOrFail($id);

        return view('frontend.pages.flight-details', compact('flight'));
    }

    public function checkout($id)
    {
        $flight = FlightSchedule::findOrFail($id);

        return view('frontend.pages.checkout', compact('flight'));
    }

    public function bookingConfirm(Request $request)
    {
        $user = User::create([
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'street' => $request->street,
            'state' => $request->state,
            'zip' => $request->zip,
            'type' => 'Passenger'
        ]);

        $userId = $user->id;

        $flight = FlightSchedule::findOrFail($request->flight_id);

        $booking = Booking::create([
            'user_id' => $userId,
            'flight_id' => $flight['id'],
            'passenger_count' => 1,
            'total_price' => $flight['price'],
            'booking_date' => Carbon::now(),
            'payment_status' => "Paid",
            'booking_status' => "Booked",
        ]);

        $bookingId = $booking->id;

        return redirect()->route('index')->with('success', 'Booked successfully.');
    }
}
