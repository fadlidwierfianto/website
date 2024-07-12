<?php

namespace App\Http\Controllers;

use App\Models\distance;
use Illuminate\Http\Request;

class DistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $distance = distance::all();
        return view('perhitungan.distance', compact('distance'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(distance $distance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(distance $distance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, distance $distance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(distance $distance)
    {
        //
    }
}
