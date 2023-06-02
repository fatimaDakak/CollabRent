<?php

namespace App\Http\Controllers;
use App\Models\Objet;
use App\Models\Annonce;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ObjetController extends Controller
{

    // public function display(){
    //     $objets=Objet::all();
    //    return view('partenaire')->with([
    //        'objets' => $objets
    //    ]);
    // }


    //GHADA --- display objets from database in the drop down menu of the form (ADDOBJET)
    public function showObjet(){
        $categ = Category::all();
        return view('partenaire.addobjet', compact('categ'));
    }


    public function display()
    {
        $id_partenaire = \Auth::user()->id_partenaire;
        $id_annonces = Annonce::where('id_partenaire', $id_partenaire)->pluck('id_annonce');
        $annonces = Annonce::whereIn('id_annonce', $id_annonces)->get();

        return view('partenaire')->with(['annonces' => $annonces]);
    }

    //delete function  souhaila
    public function delete($id_annonce)
{
    $annonce = Annonce::find($id_annonce);
    if (!$annonce) {
        return response()->json(['message' => 'Announcement not found.'], 404);
    }
    if ($annonce->id_partenaire != auth()->user()->id_partenaire) {
        return response()->json(['message' => 'Unauthorized.'], 401);
    }

    $annonce->delete();

    if(request()->ajax()){
        return response()->json(['message' => 'Announcement deleted successfully.']);
    }else{
        return redirect()->back()->with('success', 'Announcement deleted successfully.');
    }
}


// update annonce
public function update(Request $request, $id_annonce)
{
    $annonce = Annonce::find($id_annonce);

    if (!$annonce) {
        return response()->json(['message' => 'Announcement not found.'], 404);
    }

    if ($annonce->id_partenaire != auth()->user()->id_partenaire) {
        return response()->json(['message' => 'Unauthorized.'], 401);

    }
    // Retrieve all the objects that belong to the same category

    $annonce->update($request->all());


    // Ajout du code pour afficher la popup swal en cas de succès de la mise à jour
    return redirect()->back()->with('success', 'Announcement updated successfully.')
        ->with('swal', [
            'title' => 'Success',
            'text' => 'The Announcement has been updated successfully.',
            'icon' => 'success',
        ]);
}


     //Ghada-Modified ---function that displays objects in the homepage
     public function show(){
        $annonce = Annonce::with('objet')->all();
        return view('index')->with(['annonce' => $annonce]);
    }

    public function storing(Request $request)
{
    $objet = new Objet();
    //filling the fields nom_objet, id_categorie and id_partenaire
    $objet->nom_objet = request('nom_objet');
    $objet->description = request('description');
    $objet->etat_objet = request('etat_objet');
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('objet'), $imagename);
        $objet->image = $imagename;
    } else {
        $objet->image = 'default_image.jpg'; // Set a default value
    }
    $objet->id_categorie = request('id_categorie');
    $objet->id_partenaire = Auth::user()->id_partenaire;
    $objet->save();

    //display SweetAlert message if the object is added successfully
    return redirect()->route('partenaire.addobjet')
        ->with('success', 'The object has been added successfully!')
        ->with('swal', [
            'title' => 'Success',
            'text' => 'The object has been added successfully.',
            'icon' => 'success',
]);
}
}
