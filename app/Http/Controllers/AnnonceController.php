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
        $partner_id = Auth::user()->id_partenaire;
        $online_ad_count = Annonce::where('id_partenaire', $partner_id)
                                    ->where('statut_of_on', 1)
                                    ->count();
    
        $annonce = new Annonce();
        $annonce->id_objet = request('id_objet');
        $annonce->id_categorie = $request->input('id_categorie');
        $annonce->date_debut = request('date_debut');
        $annonce->date_fin = request('date_fin');
        $annonce->nbjour_min = request('nbjour_min');
        $annonce->prix_location = request('prix_location');
        $annonce->ville = request('ville');
        $annonce->type_annonce = request('type_annonce');
        
        $nbjour_min = request('nbjour_min');
        $start_date = \Carbon\Carbon::createFromFormat('Y-m-d', $annonce->date_debut);
        $end_date = \Carbon\Carbon::createFromFormat('Y-m-d', $annonce->date_fin);
        $diff_in_days = $start_date->diffInDays($end_date);
    
        // Check if the entered minimum number of days falls within the given dates
        if ($nbjour_min < 1 || $nbjour_min > $diff_in_days) {
            return redirect()->back()->withInput()->withErrors(['nbjour_min' => 'Le nombre de jours minimum doit être compris entre 1 et ' . $diff_in_days]);
        }
        
    
        if ($request->input('jours_dispo')) {
            $jours_dispo = $request->input('jours_dispo');
            foreach ($jours_dispo as $jour) {
                $annonce->$jour = 1;
            }
        }
        
        $annonce->id_partenaire = $partner_id;
    
        if ($online_ad_count < 5) {
            $annonce->statut_of_on = 1;
        } else {
            $annonce->statut_of_on = 0;
        }
    
        $annonce->save();
    
        return redirect("partenaire/addadfirst")
        ->with('success', 'L\'objet a été ajouté avec succès !')
        ->with('swal', [
            'title' => 'Success',
            'text' => 'Votre annonce a été ajoutée avec succès.',
            'icon' => 'success',
        ]);
    }
    
}
