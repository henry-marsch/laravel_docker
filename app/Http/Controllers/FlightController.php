<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Flight::all();
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
        $validated = $request->validate([
            'airline_iata' => 'required|string|max:2',
            'flight_number' => 'required|integer',
            'from_code' => 'required|string|max:3',
            'to_code' => 'required|string|max:3',
            'departure_date_utc' => 'required|date|max:255'
        ]);

        $flight = new Flight($request->all());
        
        $flight->save();

        return $flight->fresh();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'airline_iata' => 'required|string|max:2',
            'flight_number' => 'required|integer',
            'from_code' => 'required|string|max:3',
            'to_code' => 'required|string|max:3',
            'departure_date_utc' => 'required|date|max:255'
        ]);

        Flight::where('id', $id)->update([
            'airline_iata'=> $request->input('airline_iata'),
            'flight_number'=> $request->input('flight_number'),
            'from_code'=> $request->input('from_code'),
            'to_code'=> $request->input('to_code'),
            'departure_date_utc'=> $request->input('departure_date_utc')
        ]);

        return Flight::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
