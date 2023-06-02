<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eval_client extends Model
{
    use HasFactory;
    protected $table = 'eval_client';
    public $timestamps = false;

    protected $fillable = [
        'id_eval_client',
        'note',
        'sympathie',
        'type_comment',
        'id_client',
        'id_partenaire'
    ]
    ;
    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class, 'id_partenaire', 'id_partenaire');
    }
}