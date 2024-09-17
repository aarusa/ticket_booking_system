<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airline;

class AirlinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airlines = Airline::all();

        return view('cms.module.airlines.index', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = [
            'Australia' => 'Australia',
            'Canada' => 'Canada',
            'China' => 'China',
            'Dubai' => 'Dubai',
            'India' => 'India',
            'Japan' => 'Japan',
            'Nepal' => 'Nepal',
            'New Zealand' => 'New Zealand',
            'Qatar' => 'Qatar',
            'Turkey' => 'Turkey',
            'United Kingdom' => 'United Kingdom',
            'USA' => 'USA'          
        ];

        return view('cms.module.airlines.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $airline = Airline::create([
            'name' => $request->name,
            'country' => $request->country
        ]);

        $airlineId = $airline->id;

        return redirect()->route('airlines.index')->with('success', 'Airline registered successfully.');
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
        $airline =  Airline::findOrFail($id);

        $countries = [
            'Australia' => 'Australia',
            'Canada' => 'Canada',
            'China' => 'China',
            'Dubai' => 'Dubai',
            'India' => 'India',
            'Japan' => 'Japan',
            'Nepal' => 'Nepal',
            'New Zealand' => 'New Zealand',
            'Qatar' => 'Qatar',
            'Turkey' => 'Turkey',
            'United Kingdom' => 'United Kingdom',
            'USA' => 'USA'          
        ];
        
        return view('cms.module.airlines.edit', compact('airline', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $airline = Airline::findOrFail($id);
        $airline->name = $request->name;
        $airline->country = $request->country;
        $airline->save();

        return redirect()->route('airlines.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $airline = Airline::findOrFail($id);
        $airline->delete();

        return redirect()->route('airlines.index');
    }
}
