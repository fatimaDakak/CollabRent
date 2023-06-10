<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $table = 'contrat';
    protected $guarded = [];
 

    public function client()
{
    return $this->belongsTo(Client::class, 'id_client', 'id_client');
}



public function partenaire()
{
    return $this->belongsTo(Partenaire::class, 'id_partenaire', 'id_partenaire');
}

public function annonce()
{
    return $this->belongsTo(Annonce::class, 'id_annonce');
}

// public function reserver()
// {
//     return $this->belongsTo(Reserver::class, 'id_annonce', 'id_annonce');
// }

}
