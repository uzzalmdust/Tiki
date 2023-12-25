<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::all();
        return view('pages.trips.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        return view('pages.trips.create', compact('locations'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'trip_date' => 'required | date',
            'from_location' => 'required',
            'to_location' => 'required',
            'start_time' => 'required|date_format:H:i',
            'price' => 'required|min:0',
        ]);
        Trip::create($validateData);
        return redirect()->route('trips.index')->with('success', 'Trip successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        
        $locations = Location::all();
        return view('pages.trips.edit', compact('locations', 'trip'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'trip_date' => 'required | date',
            'from_location' => 'required',
            'to_location' => 'required',
            'start_time' => 'required|date_format:H:i',
            'price' => 'required|min:0',
        ]);

        $trip->trip_date = $request->trip_date;
        $trip->from_location = $request->from_location;
        $trip->to_location = $request->to_location;
        $trip->start_time = $request->start_time;
        $trip->price = $request->price;
        $trip->save();
        return redirect()->route('trips.index')->with('success', 'Trip successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $trip->save();
        return redirect()->route('trips.index')->with('success', 'Trip successfully deleted.');
    }
}
