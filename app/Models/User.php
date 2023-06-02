<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'user_type',
        'id_admin',
        'id_client',
        'id_partenaire',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function client()
    // {
    //     return $this->hasOne(Client::class);
    // }

    // /**
    //  * Get the partenaire record associated with the user.
    //  */
    // public function partenaire()
    // {
    //     return $this->hasOne(Partenaire::class);
    // }

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client','id_client');
    }

    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class, 'id_partenaire','id_partenaire');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
    public function objet()
{
    return $this->hasMany(Objet::class, 'id_partenaire');
}


};
