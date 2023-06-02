<?php
namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Reclamer;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Partenaire;
use App\Models\Objet;
use App\Models\Reserver;


use Illuminate\Http\Request;

class AdminController extends Controller
{


public function showData(){

    $annonces=Annonce::count();
    $reclamations = Reclamer::all();

    return view('dashboard_admin', ['reclamations' => $reclamations,'annonces' => $annonces]);
}
public function showClients(){
    $clients = Client::select(['id_client', 'nom','prenom'])
    ->withCount([
        'acceptedReservations as reservations_accepted' => function ($query) {
            $query->where('status', 'accepted');
        },
        'rejectedReservations as reservations_rejected' => function ($query) {
            $query->where('status', 'rejected');
        },
    ])
    ->get();
return view('clients', ['clients' => $clients]);
}



// public function index()
// {
//     $partenaires = Partenaire::all();


//     foreach ($partenaires as $partenaire) {
//         $annonces_count = Annonce::where('id_partenaire', $partenaire->id_partenaire)->count();
//         $annonces=Annonce::where('id_partenaire', $partenaire->id_partenaire);
//         $objets_count = Objet::where('id_partenaire', $partenaire->id_partenaire)->count();
//         $demandes_count = Reserver::where('id_annonce', $annonces->id_annonce)->where('status', 'pending')->count();

//         $partenaire->annonces_count = $annonces_count;
//         $partenaire->objets_count = $objets_count;
//         $partenaire->demandes_count = $demandes_count;
//     }

//     return view('partners', compact('partenaires'));
// }
 }
