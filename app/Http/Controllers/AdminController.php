<?php
namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Reclamer;
use App\Models\Client;
use App\Models\Category;
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

public function showPartners(){
    $partners = Partenaire::select('partenaire.id_partenaire', 'partenaire.nom', 'partenaire.prenom',
        \DB::raw('COUNT(DISTINCT annonce.id_annonce) AS nbr_annonce'),
        \DB::raw('COUNT(DISTINCT reserver.id_annonce) AS nbr_reservation'))
        ->leftJoin('annonce', 'annonce.id_partenaire', '=', 'partenaire.id_partenaire')
        ->leftJoin('reserver', 'reserver.id_annonce', '=', 'annonce.id_annonce')
        ->groupBy('partenaire.id_partenaire', 'partenaire.nom', 'partenaire.prenom')
        ->get();

    return view('partners',['partners'=>$partners]);
}


public function index()
{
    $categories = Category::all();
    return view('addcategorie',['categories'=>$categories]);
}

public function store(Request $request)
{
    $request->validate([
        'categorie' => 'required|unique:categorie|max:255'
    ]);

    $category = new Category;
    $category->categorie = $request->input('categorie');
    $category->save();
    return redirect('/addcategorie')->with('success', 'La catégorie a été ajoutée avec succès.');
}


}
