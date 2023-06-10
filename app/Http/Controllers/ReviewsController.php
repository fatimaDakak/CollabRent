<?php

namespace App\Http\Controllers;

use App\Models\Eval_partenaire;
use Illuminate\Http\Request;
use App\Models\Reserver;
use App\Models\Objet;
use App\Models\Eval_client;
class ReviewsController extends Controller
{
    // public function showReviews() {
    //     $id_partenaire=\Auth::user()->id_partenaire;
    //     $evaluations = Eval_partenaire::where('id_partenaire', $id_partenaire)->get();
    //     return view('reviews_partenaire', compact('evaluations'));
    // }

    public function showReviews() {
        $id_partenaire = \Auth::user()->id_partenaire;
        $evaluations = Eval_partenaire::where('id_partenaire', $id_partenaire)
            ->with('client') // Eager load the 'client' relationship
            ->get();
        return view('reviews_partenaire', compact('evaluations'));
    }

    public function showReviews1() {
        $id_client=\Auth::user()->id_client;
        $evaluations = Eval_client::where('id_client', $id_client)
        ->with('partenaire') // Eager load the 'client' relationship
        ->get();
        return view('reviews_client', compact('evaluations'));
    }
}

?>
