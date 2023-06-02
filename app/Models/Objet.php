<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    use HasFactory;

    protected $table = 'objet';
    protected $primaryKey = 'id_objet'; // added primaryKey property
    protected $fillable = [
        'id_objet',
        'nom_objet',
        'description',
        'image',
        'etat_objet',
        'id_categorie',
        'id_partenaire',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categorie', 'id_categorie');
    }

    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class, 'id_partenaire', 'id_partenaire');
    }

    public function annonce()
    {
        return $this->hasMany(Annonce::class, 'id_objet', 'id_objet')->with('objet');
    }
}
