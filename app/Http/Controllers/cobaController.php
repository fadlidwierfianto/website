<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Illuminate\Http\Request;

class cobaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternatif = alternatif::all();
        return view('game.index', ['alternatif' => $alternatif]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('game.input_game');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nama_game = $request -> alternatif;
        $c1 = $request -> c1;
        $c2 = $request -> c2;
        $c3 = $request -> c3;
        $c4 = $request -> c4;
        $c5 = $request -> c5;
        $game = new alternatif();
        $game -> alternatif = $nama_game;
        $game -> c1 = $c1;
        $game -> c2 = $c2;
        $game -> c3 = $c3;
        $game -> c4 = $c4;
        $game -> c5 = $c5;
        $game -> save();
        return redirect('alternatif');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alternatif = alternatif::find($id);
        return view('game.show_game', ['alternatif' => $alternatif]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alternatif = alternatif::find($id);
        return view('game.edit_game', ['alternatif' => $alternatif]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nama_game = $request -> alternatif;
        $c1 = $request -> c1;
        $c2 = $request -> c2;
        $c3 = $request -> c3;
        $c4 = $request -> c4;
        $c5 = $request -> c5;
        $game = alternatif::find($id);
        $game -> alternatif = $nama_game;
        $game -> c1 = $c1;
        $game -> c2 = $c2;
        $game -> c3 = $c3;
        $game -> c4 = $c4;
        $game -> c5 = $c5;
        $game -> save();
        return redirect('alternatif');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alternatif = alternatif::find($id);
        $alternatif -> delete();
        return redirect('alternatif');
    }
}
