<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClientCont extends Controller
{
    public function store(Request $request)
    {
        // Vérifier la validité du formulaire
$rules = [
    'mot_de_passe' => 'required|min:6|confirmed',
    'mot_de_passe_confirmation' => 'required|min:6',
];

$messages = [
    'mot_de_passe.required' => 'Le champ Mot de passe est requis.',
    'mot_de_passe.min' => 'Le champ Mot de passe doit avoir au moins 6 caractères.',
    'mot_de_passe.confirmed' => 'Les mots de passe ne correspondent pas.',
    'mot_de_passe_confirmation.required' => 'Le champ Confirmation de mot de passe est requis.',
    'mot_de_passe_confirmation.min' => 'Le champ Confirmation de mot de passe doit avoir au moins 6 caractères.',
];

$request->validate($rules, $messages);
        // Vérifier si l'email ou le CIN est déjà enregistré
        $email_exists = Client::where('email', $request->input('email'))->exists() || Partenaire::where('email', $request->input('email'))->exists();
        $cin_exists = Client::where('CIN', $request->input('CIN'))->exists() || Partenaire::where('CIN', $request->input('CIN'))->exists();
        if ($email_exists || $cin_exists) {
            return back()->withInput()->withErrors(['email_ou_cin' => 'L\'email ou le CIN est déjà enregistré.']);
        }
    
        // Enregistrer les données dans la table correspondante en fonction du choix du genre
        $role = $request->input('role');
        Log::debug('role selected: ' . $role); // Add this line to print out the role value
        if ($role === 'Client') {
            $client = new Client();
            $client->nom = $request->input('nom');
            $client->prenom = $request->input('prenom');
            $client->email = $request->input('email');
            $client->CIN = $request->input('CIN');
            $client->mot_de_passe = bcrypt($request->input('mot_de_passe'));
            $client->role = 2;
            $client->save();
            $user = new \App\Models\User();
            $user->id_client = $client->id;
            $user->user_type = 'Client';
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('mot_de_passe'));
            $user->save();
        } elseif ($role === 'Partenaire') {
            $partenaire = new Partenaire();
            $partenaire->nom = $request->input('nom');
            $partenaire->prenom = $request->input('prenom');
            $partenaire->email = $request->input('email');
            $partenaire->CIN = $request->input('CIN');
            $partenaire->mot_de_passe = bcrypt($request->input('mot_de_passe'));
            $partenaire->role = 3;
            $partenaire->save();
            $user = new \App\Models\User();
                $user->id_partenaire = $partenaire->id;
                $user->user_type = 'Partenaire';
                $user->email = $request->input('email');
                $user->password = bcrypt($request->input('mot_de_passe'));
                $user->save();
        }
    
        // Redirection vers une page de confirmation ou une autre page appropriée
        return redirect('/login');
    }
    }
;    

