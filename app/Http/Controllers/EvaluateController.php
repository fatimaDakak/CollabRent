<?php

namespace App\Http\Controllers;

use App\Models\Eval_partenaire;
use Illuminate\Http\Request;
use App\Models\Reserver;
use App\Models\Annonce;
use App\Models\Eval_client;

class EvaluateController extends Controller
{
//to store the evaluation done by client
public function store(Request $request){
    $id_client=\Auth::user()->id_client;
    $res=Reserver::where('id_client',$id_client)->where('status','accepted')->first();
    $ann=Annonce::where('id_annonce',$res->id_annonce)->first();
    $sympathie=request('symp');
    switch($sympathie){
        case 'Not sympathetic at all':
            $note=1;
            break;
        case 'Somewhat sympathetic':
            $note=2;
            break;
        case 'Moderately sympathetic':
            $note=3;
            break;
        case 'Very sympathetic':
            $note=4;
            break;
        case 'Extremely sympathetic':
            $note=5;
            break;
    }
    $etat_objet=request('object_state');


        $eval_cli=new Eval_partenaire;
        $eval_cli->note=$note;
        $eval_cli->sympathie=$sympathie;
        $eval_cli->etat_objet=$etat_objet;
        $eval_cli->id_client=\Auth::user()->id_client;
        $eval_cli->id_annonce=$ann->id_annonce;
        $eval_cli->type_comment=request('type');
        $eval_cli->comment_objet=request('comment');
        $eval_cli->comment_part=request('comment_part');

        $eval_cli->id_partenaire=$ann->id_partenaire;
        $eval_cli->save();
        return redirect()->back();

}

public function store2(Request $request)
{
    $id_part = \Auth::user()->id_partenaire;
    $res = Reserver::select('annonce.*', 'reserver.*')
        ->join('annonce', 'annonce.id_annonce', '=', 'reserver.id_annonce')
        ->where('annonce.id_partenaire', $id_part)
        ->where('reserver.status', 'accepted')
        ->first();

    $sympathie = request('symp');
    switch ($sympathie) {
        case 'Not sympathetic at all':
            $note = 1;
            break;
        case 'Somewhat sympathetic':
            $note = 2;
            break;
        case 'Moderately sympathetic':
            $note = 3;
            break;
        case 'Very sympathetic':
            $note = 4;
            break;
        case 'Extremely sympathetic':
            $note = 5;
            break;
    }

    $eval_cli = new Eval_client;
    $eval_cli->note = $note;
    $eval_cli->sympathie = $sympathie;
    $eval_cli->id_partenaire = $id_part;
    $eval_cli->comment = request('comment');
    $eval_cli->id_client = $res->id_client;
    $eval_cli->id_annonce = $res->id_annonce;

    $eval_cli->save();

    // evaluation saved successfully, display a success message to the user
    return redirect()->back();
}

public function index(){
    $startDate = now()->toDateString();
    $endDate = now()->addDays(10)->toDateString();
    $reservation = Reserver::select('annonce.*','reserver.*')
    ->join('annonce', 'annonce.id_annonce', '=', 'reserver.id_annonce')
    ->where('annonce.id_partenaire', auth()->user()->id_partenaire)
    ->where('reserver.status', 'accepted')
    ->whereBetween('date_Fin', [$startDate, $endDate])
//    -> whereDate('date_Fin', '<=', now()->toDateString())
   ->get();
     $eval=Eval_Client::all();

return view('eval_partenaire', ['reservation' => $reservation, 'eval' => $eval]);
}


public function index2(){
    $startDate = now()->toDateString();
    $endDate = now()->addDays(10)->toDateString();
    $reservation = Reserver::select('annonce.*','reserver.*')
    ->join('annonce', 'annonce.id_annonce', '=', 'reserver.id_annonce')
    ->where('reserver.id_client', auth()->user()->id_client)
    ->where('reserver.status', 'accepted')
    ->whereBetween('date_Fin', [$startDate, $endDate])
    ->get();
     $eval=Eval_Partenaire::all();

return view('eval_client', ['reservation' => $reservation, 'eval' => $eval]);
// return view('test', ['reservation' => $reservation, 'evaluation' => $evaluation]);
}
}
