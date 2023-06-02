<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function store(Request $request)
    { 
       
        $validatedData = $request->validate([
          
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'username' => 'required|string|email|max:255|unique:client,email',
            'CIN' => 'required|string|max:255|unique:client,cin',
            'mot_de_passe' => 'required|string|min:6|confirmed',
            'Gender' => 'required|string|in:Client,Partenaire',
            'Terms' => 'required|accepted',
           
        ]);
        dd($validatedData);
       
        try {
            dd($validatedData);
            Client::create($validatedData);
           
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer plus tard.'])->withInput();
        }
    
        return redirect()->route('login')->with('success', 'Inscription réussie !');
        dd();
    }
    
}
