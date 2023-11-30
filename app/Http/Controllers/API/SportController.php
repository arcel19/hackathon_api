<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sport = Sport::all();
        return response()->json($sport, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> ['required', 'string'],
        ]);

        $sport = Sport::create([
            'name'=>$request->name,
        ]);
        return response()->json($sport, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sport $sport)
    {
        return response()->json($sport , 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sport $sport)
    {
        $request->validate([
            'name'=>['required'],
        ]);

        $sport->update([
            'name'=>$request->name,
        ]);

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sport $sport)
    {
        $sport->delete();
        return response()->json();
    }
}
