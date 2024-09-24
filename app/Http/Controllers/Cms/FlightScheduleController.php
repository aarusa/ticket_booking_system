<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlightSchedule;
use App\Models\Airline;

class FlightScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = FlightSchedule::all();

        return view('cms.module.schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $airlines = Airline::all();
        
        return view('cms.module.schedule.create', compact('airlines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schedule = FlightSchedule::create([
            'flight_number' => $request->flight_number,
            'origin_airport' => $request->origin_airport,
            'destination_airport' => $request->destination_airport,
            'date' => $request->date,
            'time' => $request->time,
            'duration' => $request->duration,
            'available_seats' => $request->available_seats,
            'price' => $request->price,
            'status' => $request->status,
            'baggage_allowance' => $request->baggage_allowance
        ]);

        $schdeuleId = $schedule->id;

        return redirect()->route('schedule.index')->with('success', 'Schedule added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $schedule =  FlightSchedule::findOrFail($id);

        return view('cms.module.schedule.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
