<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
protected $table = 'client';
public $timestamps = false;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'CIN',
        'mot_de_passe',
        'role',
    ]
    ;

    public function user()
{
    return $this->belongsTo(User::class);
}

public function user1()
{
    return $this->belongsTo(User::class, 'id_client');
}
public function acceptedReservations()
    {
        return $this->hasMany(Reserver::class, 'id_client','id_client')->where('status', 'accepted');
    }

    public function rejectedReservations()
    {
        return $this->hasMany(Reserver::class, 'id_client','id_client')->where('status', 'rejected');
}
}