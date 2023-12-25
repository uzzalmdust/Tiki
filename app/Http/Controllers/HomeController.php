<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $locations = Location::all();
        return view('pages.home', compact('locations'));
    }
    function search(Request $request)
    {

        $validateData = $request->validate([
            'trip_date' => 'required | date',
            'from_location' => 'required',
            'to_location' => 'required',
        ]);

        $trip = Trip::where($validateData)->first();
        $booked_seat = SeatAllocation::where('trip_id', $trip->id)->count();

        return view('pages.trip', compact('trip', 'booked_seat'));
    }
    function seats($id)
    {
        $trip_id = $id;
        $seats = SeatAllocation::where('availability', 1)->get();
        return view('pages.seats', compact('seats', 'trip_id'));
    }
    function book(SeatAllocation $id, Request $request)
    {
        if (Auth::check()) {
            $id->user_id = Auth::id();
            $id->trip_id = $request->trip_id;
            $id->availability = 0;
            $id->save();
        } else {
            return redirect()->route('login');
        }

        return redirect()->route('home.ticket');
    }

    function ticket()
    {
        if (Auth::check()) {
            
            $tickets = User::with('seats')->where('id', Auth::id())->first();
            $trip = SeatAllocation::with('trip')->where('user_id', Auth::id())->first()->trip;
            //return $trip;
           // return $tickets->seats->pluck('seat_no')->implode(', ');
            return view('pages.ticket', compact('tickets', 'trip'));


        } else {
            return redirect()->route('login');
        }
    }


}

