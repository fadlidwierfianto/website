<?php

namespace App\Http\Controllers;

use App\Models\solusinegatif;
use Illuminate\Http\Request;

class SolusinegatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solusinegatif = solusinegatif::all();
        return view('perhitungan.solusinegatif', compact('solusinegatif'));
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
    public function show(solusinegatif $solusinegatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(solusinegatif $solusinegatif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, solusinegatif $solusinegatif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(solusinegatif $solusinegatif)
    {
        //
    }
}
