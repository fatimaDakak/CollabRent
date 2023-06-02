<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categorie';
    protected $fillable =[
        'id_categorie',
        'categorie'
    ];

    // public function objet(){
    //     return $this->belongsTo(Objet::class, 'id_objet');
    // }

    // public function annonce(){
    //     return $this->hasMany(Annonce::class, 'id_annonce');
    // }
    public function objets(){
        return $this->hasMany (Objet::class, 'id_categorie', 'id_categorie')
        ;}
}
