<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $league = League::all();
        return response()->json(array('league' => $league));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $league = League::create([
            'name' => $request->name,
        ]);
        return response()->json($league);
    }

    /**
     * Display the specified resource.
     */
    public function show(League $league)
    {
        return response()->json();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, League $league)
    {
        $request->validate([
            'name' => $request->name,
        ]);
        $league->update([
            'name' => $request->name,
        ]);
        return response()->json($league);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(League $league)
    {
        $league->delete();
        return response()->json();
    }
}
