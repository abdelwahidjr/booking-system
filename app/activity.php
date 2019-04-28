<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    protected $fillable = [
        'login_at',
        'ip_address',
        'user_id',
        'booking_id'
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function booking()
    {
        return $this->belongsTo(Booking::class);
    }

}
