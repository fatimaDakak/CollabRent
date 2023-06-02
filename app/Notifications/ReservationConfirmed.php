<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Client;
use App\Models\Partenaire;
class ReservationConfirmed extends Notification
{
    use Queueable;

    protected $reservation;

    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toArray($notifiable)
    {
        $client = $this->reservation->client;

        return [
            'reservation_id' => $this->reservation->id,
            'client_id' => $this->reservation->id_client,
            'client_name' => $client->nom,
            'client_prenom' => $client->prenom,
            'client_email' => $client->email,
            'object_name' => $this->reservation->objet->nom_objet,
            'date_debut' => $this->reservation->date_debut_client,
            'date_fin' => $this->reservation->date_fin_client,
            'message' => 'Nous avons le plaisir de vous informer que votre réservation d\'objet "' . $this->reservation->objet->nom_objet . '" a été confirmée.'
        ];
    }

    public function toMail($notifiable)
    {
        $data = $this->toArray($notifiable);
    
        return (new MailMessage)
        ->subject('Contrat signé - Confirmation de réservation')
        ->greeting('Cher client, chère partenaire,')
        ->line($data['message'])
        ->line('Nous sommes heureux de vous informer que votre contrat de location a bien été signé et enregistré')

        ->line('Vous trouverez ci-joint votre contrat signé contenant toutes les informations relatives à votre location.')
        ->line('Nous espérons que vous avez trouvé notre service à la hauteur de vos attentes et que vous êtes satisfait de votre réservation. Si vous avez des questions ou des préoccupations, n\'hésitez pas à nous contacter à tout moment. ' )
       
        ->action('Cliquer ici pour voir le contrat', route('contrat.show', ['id_partenaire' => $notifiable->id, 'id_annonce' => $this->reservation->id_annonce]))

        ->salutation('Merci de votre confiance, nous espérons vous revoir bientôt sur Collabrent!');
    
    }
}