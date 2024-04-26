<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the create page for user.
     */
    public function create()
    {
        return view('user.form');
    }

    public function save(Request $request)
    {
        die(var_dump($request));
        // Convalida i dati del modulo
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
    
        // Crea un nuovo utente
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Assicurati di crittografare la password
    
        // Salva l'utente nel database
        $user->save();
        if(!$user->save()){
            die(var_dump($user));
        }

        // Opzionalmente, puoi aggiungere un messaggio di successo
        return redirect()->route('welcome')->with('success', 'Utente creato con successo!');
    }
    
}

