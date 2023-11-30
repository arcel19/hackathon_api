<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competence = Competence::all();
        return response()->json($competence, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required',
        'force' => 'required|integer',
        'endurance' => 'required|integer',
        'technique' => 'required|integer',
        'precision' => 'required|integer',
        'coordination' => 'required|integer',
        'concentration' => 'required|integer',
        'reactivite' => 'required|integer',
        'strategie_jeu' => 'required|integer',
        'vitesse' => 'required|integer',
        'travail_equipe' => 'required|integer',
        'resilience' => 'required|integer',
        'gestion_pression' => 'required|integer',
    ]);

    $competence = Competence::create([
        'user_id' => $request->user_id,
        'force' => $request->force,
        'endurance' => $request->endurance,
        'technique' => $request->technique,
        'precision' => $request->precision,
        'coordination' => $request->coordination,
        'concentration' => $request->concentration,
        'reactivite' => $request->reactivite,
        'strategie_jeu' => $request->strategie_jeu,
        'vitesse' => $request->vitesse,
        'travail_equipe' => $request->travail_equipe,
        'resilience' => $request->resilience,
        'gestion_pression' => $request->gestion_pression,
    ]);

    return response()->json($competence);
}


    /**
     * Display the specified resource.
     */
    public function show(Competence $competence)
    {
        return response()->json($competence);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Competence $competence)
{
    $request->validate([
        'user_id' => 'required',
        'force' => 'required|integer',
        'endurance' => 'required|integer',
        'technique' => 'required|integer',
        'precision' => 'required|integer',
        'coordination' => 'required|integer',
        'concentration' => 'required|integer',
        'reactivite' => 'required|integer',
        'strategie_jeu' => 'required|integer',
        'vitesse' => 'required|integer',
        'travail_equipe' => 'required|integer',
        'resilience' => 'required|integer',
        'gestion_pression' => 'required|integer',
    ]);

    $competence->update([
        'user_id' => $request->user_id,
        'force' => $request->force,
        'endurance' => $request->endurance,
        'technique' => $request->technique,
        'precision' => $request->precision,
        'coordination' => $request->coordination,
        'concentration' => $request->concentration,
        'reactivite' => $request->reactivite,
        'strategie_jeu' => $request->strategie_jeu,
        'vitesse' => $request->vitesse,
        'travail_equipe' => $request->travail_equipe,
        'resilience' => $request->resilience,
        'gestion_pression' => $request->gestion_pression,
    ]);

    return response()->json($competence);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competence $competence)
    {
        $competence->delete();

        return response()->json($competence);
    }
}
