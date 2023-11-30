<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $realisation = Realisation::all();
        return response()->json($realisation, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
    // Vérifier si l'utilisateur est trouvé
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }


        $request->validate([
            'type_realisation'=>['string','required'],
            'description'=>['string', 'required'],
            'date_realisation'=>['date','required'],
            'user_id'=>['required'],
        ]);

        $realisation = Realisation::create([
            'type_realisation'=>$request->type_realisation,
            'description'=>$request->description,
            'date_realisation'=>$request->date_realisation,
            'user_id'=>$user->id,
        ]);

        $user->realisation()->save($realisation);

        return response()->json($realisation);
    }

    /**
     * Display the specified resource.
     */
    public function show(Realisation $realisation)
    {
        return response()->json($realisation, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Realisation $realisation)
    {
        $user = User::find(auth()->user()->id);

        $request->validate([
            'type_realisation' => ['string', 'required'],
            'description' => ['string', 'required'],
            'date_realisation' => ['date', 'required']
        ]);

        // Trouver la réalisation existante
        $realisation = Realisation::findOrFail($realisation->id);

        // Mettre à jour les champs
        $realisation->update([
            'type_realisation' => $request->type_realisation,
            'description' => $request->description,
            'date_realisation' => $request->date_realisation,
        ]);

        // Mettre à jour la relation avec l'utilisateur
        $user->realisation()->save($realisation);

        return response()->json($realisation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Realisation $realisation)
    {
        $realisation->delete();
        return response()->json($realisation, 201);
    }
}
