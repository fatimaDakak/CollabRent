<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
class ReservationResponse extends Notification
{
    use Queueable;

    protected $reservation;

    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
       
        $client = $this->reservation->client;

        return [
            'reservation_id' => $this->reservation->id,
           
            'object_name' => $this->reservation->objet->nom,
            'client_id' => $client->id,
            'status' => $this->reservation->status,
            'message' => 'Votre demande de réservation pour l\'objet "' . $this->reservation->objet->nom . '" a été ' . $this->reservation->status . '.'
        ];
    }
   

}
