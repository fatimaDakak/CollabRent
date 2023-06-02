<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'notifiable_id',
        'notifiable_type',
        'type',
        'data',
        'read_at',
    ];

    /**
     * Get the notifiable entity that the notification belongs to.
     */
    public function notifiable()
    {
        return $this->morphTo();
    }

    /**
     * Get the data for the notification.
     *
     * @param  string  $key
     * @return mixed
     */
    public function data($key = null)
    {
        $data = json_decode($this->attributes['data'], true);

        return data_get($data, $key);
    }

    /**
     * Set the data for the notification.
     *
     * @param  mixed  $data
     * @return $this
     */
    public function setData($data)
    {
        $this->attributes['data'] = json_encode($data);

        return $this;
    }

    /**
     * Get the type of the notification.
     *
     * @return string
     */
    public function getTypeAttribute()
    {
        return class_basename($this->attributes['type']);
    }

    /**
     * Set the type of the notification.
     *
     * @param  string  $value
     * @return void
     */
    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = "App\\Notifications\\{$value}";
    }
}
