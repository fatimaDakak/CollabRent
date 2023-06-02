<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamer extends Model
{
    use HasFactory;
    protected $table = 'reclamation';
    protected $primaryKey = 'id_annonce';

    protected $fillable = [
        'reclamation_de',
        'reclamation_sur',
        'description',
        'id_client',
        'id_partenaire',
        'id_annonce'];

}