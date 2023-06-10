<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eval_partenaire extends Model
{
    use HasFactory;
    protected $table = 'eval_partenaire';
    public $timestamps = false;

    protected $fillable = [
        'id_eval_partenaire',
        'note',
        'sympathie',
        'id_client',
        'type_comment',
        'comment_part',
        'id_annonce',
        'etat_objet',
        'id_partenaire'
    ]
    ;
    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client', 'id_client');
}
public function objet()
{
    return $this->belongsTo(Objet::class, 'id_objet', 'id_objet');
}

}
