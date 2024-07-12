<?php

namespace App\Http\Controllers;

use App\Models\normbobot;
use Illuminate\Http\Request;

class NormbobotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $normbobot = normbobot::all();
        return view ('perhitungan.normalisasibobot', compact('normbobot'));

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
    public function show(normbobot $normbobot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(normbobot $normbobot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, normbobot $normbobot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(normbobot $normbobot)
    {
        //
    }
}
