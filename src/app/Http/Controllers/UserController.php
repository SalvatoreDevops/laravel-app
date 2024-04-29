<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Assicurati di crittografare la password

        if ($user->save()) {
            // Se il salvataggio va a buon fine, puoi reindirizzare l'utente o fare altre azioni
            return redirect()->route('user.index')->with('success', 'User created successfully');
        } else {
            // Se c'è un errore nel salvataggio, puoi gestirlo qui
            return redirect()->back()->withInput()->with('error', 'Failed to create user');
        }
}


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        die(var_dump($user));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
