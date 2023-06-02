<?php

namespace App\Http\Controllers;
use App\Mail\ReservationAccepted;
use Illuminate\Support\Facades\Mail;
use App\Models\Reserver;
use App\Models\Objet;
use App\Models\Contrat;
use App\Models\Client;
use App\Models\Partenaire;
use App\Models\Reclamer;
use App\Models\Eval_client;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Notifications\ReservationNotification;
use App\Models\User;
use App\Models\Annonce;
use Illuminate\Support\Facades\Notification;
use App\Events\ReservationCreated;
use NotificationChannels\WebPush\WebPushChannel;
use NotificationChannels\WebPush\WebPushMessage;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ReservationConfirmed;
use App\Notifications\ReservationConfirmed1;
use App\Notifications\ReservationResponse;
use App\Notifications\ObjectReturned;
use App\Models\Eval_partenaire;
use Intervention\Image\Facades\Image;

use Carbon\Carbon;
class ReserverController extends Controller
{
    //  public function affichage()
    // {
    //     $reservations = Reserver::all();
    //     return view('order')->with([
    //         'reservations' => $reservations
    //    ]);
    //    dd($reservations);
    // }
    public function index()
    {
        $user = auth()->user();

        if (!$user) {
            return redirect()->route('login');
        }

        // Retrieve reservations for the user
        $reservations = Reserver::join('objet', 'reserver.id_objet', '=', 'objet.id_objet')
        ->where('objet.id_partenaire', $user->id_partenaire)
        ->get();
        // Retrieve notifications for the user
        $notifications = $user->unreadNotifications;
        // Retrieve objects for the user
        $objets = Objet::where('id_partenaire', $user->id_partenaire)->get();
        // Pass the reservations, notifications, and objects to the view
        return view('order')->with([
            'reservations' => $reservations,
            'notifications' => $notifications,
            'objets' => $objets,
 ]);
}



    public function order_envoyer()
    {
        $user = auth()->user();

        // Retrieve reservations for the user
        $reservations = Reserver::where('id_client', $user->id)->get();

        return view('order_envoyer')->with([
            'reservations' => $reservations,
        ]);

    }



        public function update(Request $request, $id)
        {
            $reservation = Reserver::findOrFail($id);
            $status = $request->input('status');

            if ($status === 'accepted' || $status === 'refused') {
                $reservation->status = $status;
                $reservation->save();
            }
            return redirect()->back();
        }

        public function storeReserve(Request $request)
        {
            $reserve = new Reserver();
            $reserve->date_debut_client = request('DD');
            $reserve->date_fin_client = request('DF');
            $reserve->id_objet = request('id_objet');
            $reserve->id_annonce = request('id_annonce');
            $reserve->id_client = \Auth::user()->id_client;
            $reserve->save();
            $request->session()->flash('success', 'Reservation successful!');

           // Define the folder path where to save the signature files
// Save the client's signature image
$folderPath = public_path('signatures/');
$image_parts = explode(";base64,", $request->signed);
$image_type_aux = explode("image/", $image_parts[0]);
$contrat_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$signature_file = $folderPath . uniqid() . '.' . $contrat_type;
file_put_contents($signature_file, $image_base64);



// Save the signature filename to the database
Contrat::create([
    'id_client' => \Auth::user()->id_client,
    'id_partenaire' => $request->id_partenaire,
    'id_annonce' => $request->id_annonce,
    'signature_client' => basename($signature_file),
]);

            
    
            $user = auth()->user();

            // Get the object being reserved
          // Get the object being reserved
          $objet = Objet::where('id_objet', $reserve->id_objet)->first();


            // Get the partner user who owns the reserved object
            $partnerUser = User::whereHas('objet', function ($query) use ($objet) {
                $query->where('id_objet', $objet->id_objet)->where('id_partenaire', $objet->id_partenaire);
            })->where('role', 2)->first();
            // Send notification to the partner
            if ($partnerUser) {
                Notification::send($partnerUser, new ReservationNotification($reserve));
            }

            // NOTIFICATIONS FORMULAIRE

            // Get the object being reserved
            $objet = Objet::where('id_objet', $reserve->id_objet)->first();

            // Get the partner user who owns the reserved object
            $partnerUser = User::whereHas('objet', function ($query) use ($objet) {
                $query->where('id_objet', $objet->id_objet)->where('id_partenaire', $objet->id_partenaire);
            })->first();

               if ($reserve->status === 'accepted'){
            // Send notification to the partner
            if ($partnerUser) {
                $partnerUser->notify(new ObjectReturned($objet->id_objet));
            }

            // Send notification to the client
            $clientUser = User::where('id_client', $reserve->id_client)->first();
            if ($clientUser) {
                $clientUser->notify(new ObjectReturned($objet->id_objet));
            }

        }


            return redirect("/objets/" . Objet::where('id_objet', $reserve->id_objet)->value('id_categorie'));
            }





        public function update1(Request $request, $id)
        {
            $reservation = Reserver::findOrFail($id);

            $status = $request->input('status');

            if ($status === 'accepted' || $status === 'refused') {
                $reservation->status = $status;
                $reservation->save();
                $clientUser = User::find($reservation->id_client);
                $clientUser->notify(new ReservationResponse($reservation));
                // Send notification to the partner
                if ($status === 'accepted'){
                    $partnerUser = User::find($reservation->objet->id_partenaire);
                    if ($partnerUser && $partnerUser->id === auth()->user()->id) {
                        $partnerUser->notify(new ReservationConfirmed($reservation));
                        $partnerUser->notify(new ReservationConfirmed1($reservation));
                        $clientUser = User::find($reservation->id_client);
                        $clientUser->notify(new ReservationConfirmed($reservation));
                    }
                   
                }
            }

            if ($status === 'accepted'){
            // Find the existing contract by the annonce ID and client ID
                $contrat = Contrat::where('id_annonce', $request->id_annonce)
                ->first();
// Define the folder path where to save the signature files
$folderPath = public_path('signatures/');

// Extract the signature data from the request
$image_parts = explode(";base64,", $request->signed);
$image_type_aux = explode("image/", $image_parts[0]);
$contrat_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);

// Generate a unique filename for the signature file
$signature_file = $folderPath . uniqid() . '.' . $contrat_type;

// Save the signature data to the file
file_put_contents($signature_file, $image_base64);

// Save the signature filename to the database
$contrat->update([
    'signature_partenaire' => basename($signature_file),
]);

            }

            // // Save in your data in database here.
            // Contrat::create([
            //     'id_client' => \Auth::user()->id_client,
            //     'id_partenaire' => $request->id_partenaire,
            //     'id_annonce' => $request->id_annonce,
            //     'signature_partenaire' => uniqid() . '.' . $contrat_type,
    
            // ]);


            return redirect()->back();
        }


    public function reservationConfirmed($id)
    {
        $reservation = Reserver::findOrFail($id);
        $user = $reservation->client;

        $notification = new ReservationConfirmed($reservation);
        $user->notify($notification);

        return redirect()->back();
    }

    public function markNotificationAsRead($id)
    {
        $user = auth()->user();
        $user->notifications()->where('id', $id)->update(['read_at' => now()]);

        return redirect()->back();
    }

    // public function display($id_objet){
    // $objets=Objet::where('id_objet',$id_objet)->first();
    // return view('product-single')->with(['objets' => $objets]); }

    public function index1()
    {
        // Retrieve all reservations
        $reservations = Reserver::all();

        // Retrieve all notifications for the authenticated partner user
        $notifications = auth()->user()->unreadNotifications;

        // Pass the reservations and notifications to the view
        return view('order1')->with([
            'reservations' => $reservations,
            'notifications' => $notifications
        ]);
    }

    public function affichage()
    {
        $reservations = Reserver::all();
        return view('order')->with([
            'reservations' => $reservations]);
        }



    //GHADA_added:
        //function that displays elements from annonce table in the product single page
        public function display($id_annonce){
            $annonceDetails=Annonce::with('objet')->where('id_annonce',$id_annonce)->first();
            $reviews=Eval_partenaire::with('objet')->where('id_annonce',$annonceDetails->id_annonce)->get();
            return view('product-single')->with(['annonceDetails' => $annonceDetails, 'reviews' => $reviews]);
        }
        


    //FUNCTION THAT DISPLAYS INFORMATION ABOUT THE USER THAT PUBLISHED THE ANNONCE
    public function voirProfile($idAnnonce){
            $voir = Annonce::with('partenaire')->findOrFail($idAnnonce);
            $publisher = $voir->partenaire;
            $annonces = Annonce::with('objet')->where('id_partenaire', $publisher->id_partenaire)->get();
            $evalua= Eval_partenaire::where('id_partenaire',  $publisher->id_partenaire)
            ->with('client') // Eager load the 'client' relationship
            ->get();
            return view('partenaire.profile_part1')->with(['publisher' => $publisher, 'annonces' => $annonces,'evalua'=>$evalua]);
    }


    public function sendReclamation(Request $request, $id_objet)
    {
        $Reclamer = new Reclamer();
        $Reclamer->reclamation_de = Auth::user()->name;
        $Reclamer->description = $request->input('reclamation');
        $Reclamer->id_client = Auth::user()->id_client;

        $id_annonce = Annonce::where('id_objet',$id_objet)->firstOrFail();
        $Reclamer->id_annonce = $id_annonce->id_annonce;

        $objet = Objet::where('id_objet', $id_objet)->firstOrFail();
        $PID = $objet->id_partenaire;

        $partenaire = Partenaire::where('id_partenaire', $PID)->firstOrFail();

        $Reclamer->reclamation_sur = $partenaire->nom;
        $Reclamer->id_partenaire = $partenaire->id_partenaire;
        $Reclamer->save();

        // You can redirect back to the previous page after saving the reclamer if needed
        return redirect()->back();
    }


    public function showData(){
        $reclamations = Reclamer::all();
        return view('dashboard_admin', ['reclamations' => $reclamations]);
    }

    public function supprimer($id)
    {

        $reclamation = Reclamer::findOrFail($id);

        $id_partenaire = $reclamation->id_partenaire;

        $client = Client::where('id_client', $id_partenaire)->findOrFail($id_partenaire);

        // $partner = Partenaire::where('id_partenaire',$id_partenaire)->firstOrFail();
        // $annonce = Annonce::where('id_partenaire',$id_partenaire)->findOrFail($id_partenaire);

        $partener = Partenaire::where('id_partenaire',$id_partenaire)->findOrFail($id_partenaire);

    // Delete the related records and the main record using cascade delete
        $partener->delete();
        $client->delete();
    // Redirect back with success message
        return redirect()->back()->with("successThe partner with id has been deleted.");
    }



    public function voirClient($id_Client){
        $evalua = Eval_client::where('id_client',$id_Client)->first();
        $client = Client::where('id_client',$id_Client)->first();

        return view('client.profile')->with(['evalua'=>$evalua,'client'=>$client]);
    }


    public function update2(){
        $pd = "pending";
        $currentTime = Carbon::now();

/*        $reservations = Reserver::where("status","=",$pd)->where('created_at',"=>",$currentTime->subHours(24))->get();*/
            /*$reservations = Reserver::where("status", "=", $pd)
                ->where('created_at', '<=', $currentTime->subHours(24))
                ->get();*/

            $reservations = Reserver::all();


            foreach ($reservations as $reservation) {
                if ($reservation->created_at->diffInHours($currentTime) > 24 and $reservation->status == "pending") {
                    $reservation->delete();
                }
            }

   /* foreach($reservations as $reservation){
        $reservation->delete();
    }*/
}
}
