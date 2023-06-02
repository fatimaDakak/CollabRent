<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Partenaire;


class PartenaireController extends Controller
{
//to show profile and annonces informations ;
    public function show($id)
    {
        $partenaire = Partenaire::where('id_partenaire', $id)->first();
        return view('partenaire.profile_part', ['id' => $id, 'partenaire' => $partenaire]);
    }


    public function updateStatus(Request $request, $id_annonce)
    {
        $annonce = Annonce::find($id_annonce);
            
        if ($annonce->statut_of_on == 1) {
            $annonce->statut_of_on = 0;
        } else {
            // Check if the number of online announcements is less than 5
            $online_announcements = Annonce::where('id_partenaire', auth()->user()->id_partenaire)
                                            ->where('statut_of_on', 1)
                                            ->count();
            if ($online_announcements < 5) {
                $annonce->statut_of_on = 1;
            } else {
                return response()->json(['error' => 'You can only have 5 online announcements.'], 400);
            }
        }
        $annonce->save();
        
        return response()->json(['status' => $annonce->statut_of_on], 200);
    }
    
    
    
}

