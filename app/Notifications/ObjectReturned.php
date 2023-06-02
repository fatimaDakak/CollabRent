<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Notification;
use App\Models\Objet;

class ObjectReturned extends Notification implements ShouldQueue
{
    use Queueable;

    private $object_id;

    public function __construct($object_id)
    {
        $this->object_id = $object_id;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        $object = Objet::findOrFail($this->object_id);
        return [
            'message' => 'L\'objet ' . $object->nom_objet . ' est maintenant disponible à la réservation.',
            'object_id' => $object->id_objet,
        ];
    }
}
