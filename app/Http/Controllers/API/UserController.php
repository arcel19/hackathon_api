<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required', 'string', 'max:255'],
            'email'=> ['required', 'string','email', 'max:255','unique:users'],
            'password'=>['required'],
            'path'=>['string'],
            'location'=>['required','string'],
            'gender'=>['required', 'string'],
            'phone'=>['integer','required'],
            'date_of_birth'=>['required','date'],
            'sport_id'=>'integer',
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'path'=>$request->path,
            'password'=>Hash::make($request->password),
            'location'=>$request->location,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'date_of_birth'=>$request->date_of_birth,
            
        ]);

        $user->sport->associate($request->sport_id);
        $user->save();

        return response()->json($user,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

            return response()->json($user, 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=>['required', 'string', 'max:255'],
            'email'=> ['required', 'string','email', 'max:255','unique:users'],
            'password'=>['required'],
            'path'=>['string'],
            'location'=>['required','string'],
            'gender'=>['required', 'string'],
            'phone'=>['integer','required'],
            'date_of_birth'=>['required','date'],
        ]);

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'path'=>$request->path,
            'password'=>Hash::make($request->password),
            'location'=>$request->location,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'date_of_birth'=>$request->date_of_birth,
        ]);
        return response($user)->json();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json();
    }
}
