<?php
namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Category;
use App\Models\Objet;
use Illuminate\Support\Facades\Auth;
use DB;



use Illuminate\Http\Request;

class AnnonceController extends Controller
{

    // public function store(Request $request)
    // {

    //     $annonce = new Annonce();
    //     $annonce->prix_location = request('price');
    //     $annonce->ville = request('location');
    //     $annonce->date_dispo = request('date');
    //     $annonce->statut_of_on = 1;
    //     $annonce->id_categorie = 1;
    //     $annonce->type_annonce = "normal";
    //     $annonce->id_partenaire = Auth::user()->id_partenaire;
    //     $annonce->save();

    //     return redirect("/");
    // }

    
    public function showCategory(){
        $cat= Category::all();
        return view('partenaire.addadfirst', compact('cat')); 
    }
    
    public function redirectForm($identifiant){
        
        $select = Category::where('id_categorie', $identifiant)->first();
        $id_part =Auth::user()->id_partenaire;
        $ob = Objet::where('id_partenaire', $id_part )->get();


        $sel = Objet::select('objet.*','categorie.*')
        ->join('categorie', 'objet.id_categorie', '=', 'categorie.id_categorie')
        ->where('objet.id_partenaire', $id_part)
        ->where('categorie.id_categorie', $identifiant)
        ->get();
        //  return view('partenaire.addad', compact('sel', 'ob'));
        return view('partenaire.addad', [
            'id_categorie' => $identifiant,
            'sel' => $sel,
            'ob' => $ob
        ]);
    }
    
    // public function store1(Request $request)
    // {
    //     $annonce = new Annonce();
    //     $annonce->id_objet = request('id_objet');
    //     $annonce->id_categorie = $request->input('id_categorie');
    //     $annonce->description = request('description');
    //     $annonce->date_debut = request('date_debut');
    //     $annonce->nbjour_min = request('nbjour_min');
    //     $annonce->prix_location = request('prix_location');
    //     $annonce->etat_objet = request('etat_objet');
    //     $annonce->ville = request('ville');
    //     $annonce->statut_of_on = 1;
    //     $annonce->type_annonce = "normal";
    //     $annonce->id_partenaire = Auth::user()->id_partenaire;
    //     //$annonce->id_categorie = $annonce->id_categorie;
    //     //$annonce->id_objet = $annonce->id;
    //     if ($request->hasFile('image') && $request->file('image')->isValid()) {
    //         $image = $request->file('image');
    //         $imagename = time().'.'.$image->getClientOriginalExtension();
    //         $image->move(public_path('objet'), $imagename);
    //         $annonce->image = $imagename;
    //     } else {
    //         $annonce->image = 'default_image.jpg'; // Set a default value
    //     }
    //     $annonce->save();
    //     //$message = "Data has been saved successfully!";
    //     return redirect("partenaire/addadfirst");
    // }

    public function store1(Request $request)
    {
        $annonce = new Annonce();
        $annonce->id_objet = request('id_objet');
        $annonce->id_categorie = $request->input('id_categorie');
        $annonce->date_debut = request('date_debut');
        $annonce->date_fin = request('date_fin');
        $annonce->nbjour_min = request('nbjour_min');
        $annonce->prix_location = request('prix_location');
        $annonce->ville = request('ville');
        $annonce->statut_of_on = 1;
        $annonce->type_annonce = request('type_annonce');
        if ($request->input('jours_dispo')) {
            $jours_dispo = $request->input('jours_dispo');
            foreach ($jours_dispo as $jour) {
                $annonce->$jour = 1;
            }
        }
        
        $annonce->id_partenaire = Auth::user()->id_partenaire;
        //$annonce->id_categorie = $annonce->id_categorie;
        //$annonce->id_objet = $annonce->id;

        $annonce->save();
        //$message = "Data has been saved successfully!";
        return redirect("partenaire/addadfirst")
        ->with('success', 'The object has been added successfully!')
        ->with('swal', [
            'title' => 'Success',
        'text' => 'Votre annonce a été Ajoutée avec Succès.',
            'icon' => 'success',
   ]);
}
}
