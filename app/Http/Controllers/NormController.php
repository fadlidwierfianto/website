<?php

namespace App\Http\Controllers;

use App\Models\norm;
use Illuminate\Http\Request;

class NormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $norm = norm::all();
        return view('perhitungan.normalisasi', compact('norm'));
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
    public function show(norm $norm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(norm $norm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, norm $norm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(norm $norm)
    {
        //
    }
}
