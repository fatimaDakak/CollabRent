<?php

namespace App\Notifications;

use App\Models\Reserver;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\Models\Objet;
use Illuminate\Notifications\Notification;

class ReservationNotification extends Notification
{
    private $reservation;
  
    public function __construct(Reserver $reservation)
    {
        $this->reservation = $reservation;
    }
  
    public function via($notifiable)
    {
        return ['database'];
    }
  
    public function toArray($notifiable)
    {
        return [
            'reservation_id' => $this->reservation->id,
            'objet_name' => $this->reservation->objet->nom_objet,
            'client_id' => $this->reservation->id_client,
            'message' => 'Vous avez une nouvelle demande de réservation.'
        ];
    }
    
    public function toDatabase($notifiable)
    {
        $objet = Objet::findOrFail($this->reservation->id_objet);
        
        return [
            'reservation_id' => $this->reservation->id,
            'objet_name' => $objet->nom_objet,
            'status' => $this->reservation->status,
        ];
    }
}
