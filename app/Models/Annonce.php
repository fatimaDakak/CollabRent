<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    protected $table = 'annonce';
    protected $primaryKey = 'id_annonce';
    protected $fillable = [
        'id_annonce',
        'ville',
        'date_debut',
        'date_fin',
        'prix_location',
        'nbjour_min',
        'statut_of_on',
        'type_annonce',
        'date_annonce',
        'id_objet',
       'id_partenaire',
       'id_categorie',
       'lundi',
       'mardi',
       'mercredi',
       'jeudi',
       'vendredi',
       'samedi',
       'dimanche'
    ];



    public function categorie()
    {
        return $this->hasOne(Category::class, 'id_categorie', 'id_categorie');
    }

    public function partenaire()
    {
        return $this->hasOne(Partenaire::class, 'id_partenaire', 'id_partenaire');
    }
//MODIFIED deleted this and updated it with objet instead of annnonce 
    //   public function annonce(){
    //      return $this->belongsTo(Objet::class, 'id_objet', 'id_objet');
    //  }

    public function objet()
        {
            return $this->belongsTo(Objet::class, 'id_objet', 'id_objet', 'id_objet');
        }
}
