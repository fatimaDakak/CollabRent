<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reserver extends Model
{
    use HasFactory;
    protected $table = 'reserver';
    protected $fillable = [
        'id_client',
        'id_objet',
        'id_annonce',
        'date_debut_client',
        'date_fin_client',
        'status',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client', 'id_client')->with('user', 'user.role'); 
    }
    
    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class, 'id_partenaire')->with('user', 'user.role');
    }



    // public function contrat()
    // {
    //     return $this->hasOne(Contrat::class, 'id_annonce', 'id_annonce');
    // }



    public function annonce()
    {
        return $this->belongsTo(Annonce::class, 'id_annonce','id_annonce', 'id_annonce');
    }
    
    public function objet(){
        return $this->belongsTo(Objet::class, 'id_objet', 'id_objet', 'id_objet');
    }

    public function isReserved()
    {
        $now = now();
        return $this->status === 'accepted' && $now->between($this->date_debut, $this->date_fin);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function getPartenaireEmailAttribute()
    {
        return $this->user->partenaire->email;
    }
    
    public function isNew()
    {
        $created_at = $this->created_at;
        $now = \Carbon\Carbon::now();
        $diff = $created_at->diffInMinutes($now);
    
        return $diff <= 60; // return true if the reservation is less than an hour old 
    }
    public function scopeEndedButNotReturned($query)
    {
        return $query->where('date_fin', '<', now())->whereNull('date_retour');
    }

    
}