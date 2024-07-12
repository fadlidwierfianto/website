<?php

namespace App\Http\Controllers;

use App\Models\solusipositif;
use Illuminate\Http\Request;

class SolusipositifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solusipositif = solusipositif::all();
        return view('perhitungan.solusipositif', compact('solusipositif'));
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
    public function show(solusi $solusi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(solusi $solusi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, solusi $solusi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(solusi $solusi)
    {
        //
    }
}
