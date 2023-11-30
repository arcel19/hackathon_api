<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistic = Statistic::all();
        return response()->json($statistic);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'goals'=> 'required|integer',
            'matches'=>'string|integer',
            'average'=>'required|integer',
            'user_id'=>'required|integer',
            'assists'=>'required|integer',
        ]);

        $statistic = Statistic::create([
            'goals'=>$request->goals,
            'matches'=>$request->matches,
            'average'=>$request->average,
            'assists'=>$request->assists,
            'user_id'=>$request->user_id,
        ]);

        return response()->json($statistic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistic $statistic)
    {
        return response()->json($statistic);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statistic $statistic)
    {
        $request->validate([
            'goals'=> 'required|integer',
            'matches'=>'string|integer',
            'average'=>'required|integer',
            'user_id'=>'required|integer',
            'assists'=>'required|integer',
        ]);
        $statistic->update([
            'goals'=>$request->goals,
            'matches'=>$request->matches,
            'average'=>$request->average,
            'assists'=>$request->assists,
            'user_id'=>$request->user_id,
        ]);

        return response()->json($statistic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistic $statistic)
    {
        $statistic->delete();
        return response()->json($statistic);
    }
}
