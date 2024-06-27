<?php

namespace App\Http\Controllers;

use App\Models\bobot;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bobot = bobot::all();
        return view('bobot', ['bobot' => $bobot]);
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
    public function show(bobot $bobot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bobot = bobot::find($id);
        return view('edit_bobot', ['bobot' => $bobot]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $w1 = $request -> w1;
        $w2 = $request -> w2;
        $w3 = $request -> w3;
        $w4 = $request -> w4;
        $w5 = $request -> w5;
        $bobot = bobot::find($id);
        $bobot -> w1 = $w1;
        $bobot -> w2 = $w2;
        $bobot -> w3 = $w3;
        $bobot -> w4 = $w4;
        $bobot -> w5 = $w5;
        $bobot -> save();
        return redirect('bobot');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bobot $bobot)
    {
        //
    }
}
