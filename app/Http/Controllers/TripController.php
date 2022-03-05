<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Trip;
use App\City;
use Gate;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Gate::denies('edit-users')) {
            $trips = Auth::user()->trips;
            return view('trip.index')->withTrips($trips);
        } else {
            $trips = Trip::all();
            return view('trip.index')->withTrips($trips);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $city = City::find($request->name);

        if ($city->available) {
            $trip = new Trip;
            $trip->name = $city->name;
            $trip->city_id = $city->id;
            $trip->departure = $request->departure;
            $trip->arrival = $request->arrival;
            $trip->save();
            $trip->users()->sync(Auth::user(), false);
            return redirect()->route('trips.index');
        } else {
            return url()->previous();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        $trip->users()->detach();
        $trip->delete();
        return redirect()->route('trips.index');
    }
}
