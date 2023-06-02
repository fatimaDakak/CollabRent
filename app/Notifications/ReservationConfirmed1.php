<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Client;
use App\Models\Partenaire;
class ReservationConfirmed1 extends Notification
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
            'message' => 'L\'acceptation de réservation pour l\'objet "' . $this->reservation->objet->nom_objet . '" a été confirmée.'
        ];
    }

    public function toMail($notifiable)
    {
        $data = $this->toArray($notifiable);
    
        return (new MailMessage)
        ->subject('Confirmation de réservation')
        ->greeting('Bonjour,')
        ->line($data['message'])
        ->line('La réservation est confirmé pour les dates suivantes :')
        ->line('Du ' . $data['date_debut'] . ' au ' . $data['date_fin'] . '.')
        ->line('Voici les informations du client ayant effectué la réservation :')
        ->line('Nom : ' . $data['client_name'])
        ->line('Prénom : ' . $data['client_prenom'])
        ->line('Email : ' . $data['client_email'])
       
        ->salutation('Merci de votre confiance en CollabRent!');
    
    }
}