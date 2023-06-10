<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Category;
use App\Models\Objet;
use App\Models\Reserver;

use DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function display(){
        $objets=Objet::all();
        $cat1 = Category::where('id_categorie', 1)->first();
        $cat2 = Category::where('id_categorie', 2)->first();
        $cat3 = Category::where('id_categorie', 3)->first();
        $reserverController = new ReserverController();
        $reserverController->update2();
        return view('index', compact('objets','cat1', 'cat2', 'cat3' ));
    }



    public function basedCategory(Request $request, $cat) {
        $categories = Category::where('id_categorie', $cat)->first();
    
        $annonces = Annonce::with('objet')
            ->where('id_categorie', $cat)
            ->where('statut_of_on', 1)
            ->whereNotIn('id_annonce', function($query) {
                $query->select('id_annonce')
                    ->from('reserver')
                    ->whereIn('status', ['pending', 'accepted']);
            });
            
    
        // Filter by city
        if (request()->has('city')) {
            $cities = explode(',', request('city'));
            $annonces->whereIn('ville', $cities);
        }
        if (request()->has('min-rental')) {
            $minRentals = request('min-rental');
            if (in_array('+7', $minRentals)) {
                $annonces->where('nbjour_min', '>=', 7);
            } else {
                $annonces->whereIn('nbjour_min', $minRentals);
            }
        }

        if (request()->has('date_dispo')) {
            $annonces->where('date_fin', '>=', request('date_dispo'));
        }
        
        if (request()->has('prix_location')) {
            $annonces->where('prix_location', '<=', request('prix_location'));
        }
        
        if (request()->has('comment')) {
            $comment = explode(',', request('comment'));
            $annonces->whereIn('id_annonce', function ($query) use ($comment) {
                $query->select('id_annonce')
                      ->from('eval_partenaire')
                      ->whereIn('type_comment', $comment);
            });
        }
        
                
        
    
        $annonce = $annonces->get();
        $reserverController = new ReserverController();
        $reserverController->update2();
    
        return view('objets', compact('categories', 'annonce', 'cat'));
    }
    

   
   
    
}
