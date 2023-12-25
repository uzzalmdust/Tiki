<?php

namespace App\Http\Controllers;

use App\Models\SeatAllocation;
use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seats = SeatAllocation::get(['id', 'seat_no']);
        return view('pages.seats.index', compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.seats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'seat_no' => 'required|max:4'
        ]);

        SeatAllocation::create($validateData);

        return redirect()->route('seat-allocations.index')->with('success', 'Seat successfully added.');

    }

    /**
     * Display the specified resource.
     */
    public function show(SeatAllocation $seatAllocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SeatAllocation $seatAllocation)
    {
        return view('pages.seats.edit', ['seats' => $seatAllocation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SeatAllocation $seatAllocation)
    {
        $request->validate([
            'seat_no' => 'required|max:4'
        ]);

        $seatAllocation->seat_no = $request->seat_no;
        $seatAllocation->save();

        return redirect()->route('seat-allocations.index')->with('success', 'Seat successfully updated.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeatAllocation $seatAllocation)
    {
        $seatAllocation->delete();

        return redirect()->route('seat-allocations.index')->with('success', 'Seat successfully deleted.');
    }
}
