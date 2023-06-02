<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\Partenaire;
use App\Models\Annonce;
use Illuminate\Support\Facades\Response;

use Dompdf\Dompdf;

class ContratController extends Controller
{

public function show()
{
    $contrat = new Contrat();
    return view('contrat', compact('contrat'));
}

public function storeContract(Request $request)
{
    $contrat = new Contrat();
    $contrat->id_client = Auth::user()->id;
    $contrat->id_partenaire = $request->input('id_partenaire');
    $contrat->id_annonce = $request->input('id_annonce');
    $contrat->signature_client = $request->has('signature');
    $contrat->signature_partenaire = false; // You may need to update this field later
    $contrat->save();

    return redirect()->back()->with('success', 'Le contrat a été signé et la réservation a été confirmée.');
}
   public function showContrat(Request $request, $id_partenaire, $id_annonce)
    {
        $contrat = Contrat::where('id_partenaire', $id_partenaire)
            ->where('id_annonce', $id_annonce)
            ->first();
            
        if (!$contrat) {
            // Try to find the contract with id_client instead
            $contrat = Contrat::where('id_client', $id_partenaire)
                ->where('id_annonce', $id_annonce)
                ->first();
            if (!$contrat) {
                abort(404, 'Contrat not found');
            }
        }
        
        $client = Client::where('id_client', $contrat->id_client)->first();
        $partenaire = Partenaire::where('id_partenaire', $contrat->id_partenaire)->first();
        $annonce = Annonce::where('id_annonce', $contrat->id_annonce)->first();
    
        return view('contrat', [
            'contrat' => $contrat,
            'client_name' => $client->nom,
            'signature_client' => $contrat->signature_client,
            'partenaire' => $partenaire,
            'annonce' => $annonce,
        ]);
    }
 public function pdf(Request $request, $id_partenaire, $id_annonce)
{
    $contrat = Contrat::where('id_partenaire', $id_partenaire)
            ->where('id_annonce', $id_annonce)
            ->first();
            
    if (!$contrat) {
        // Try to find the contract with id_client instead
        $contrat = Contrat::where('id_client', $id_partenaire)
            ->where('id_annonce', $id_annonce)
            ->first();
        if (!$contrat) {
            abort(404, 'Contrat not found');
        }
    }
    
    $client = Client::where('id_client', $contrat->id_client)->first();
    
    $html = view('contrat', [
        'contrat' => $contrat,
        'client_name' => $client->nom,
        'signature_client' => $contrat->signature_client,
    ])->render();
    
    $pdf = new Dompdf();
  // Set the base path for images
  $pdf->setBasePath(public_path());
    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();
    

    return response($pdf->output(), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="contrat.pdf"');
}

    
}