<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;
    protected $table = 'partenaire';
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'CIN',
        'mot_de_passe',
        'role',
    ];



    public function annonces()
    {
        return $this->hasManyThrough(Annonce::class, Objet::class, 'id_partenaire', 'id_objet');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_partenaire');
    }


    public function annoncesEnLigne()
    {
        return $this->objets()->where('status_of_on', true)->count();
    }

    public function demandesDeReservation()
    {
        return $this->objets()->whereHas('reserver', function ($query) {
            $query->where('status', 'pending');
        })->count();
    }

    public function objetsReserves()
    {
        return $this->objets()->whereHas('reservations', function ($query) {
            $query->where('status', 'accepted');
        })->count();
    }

}
